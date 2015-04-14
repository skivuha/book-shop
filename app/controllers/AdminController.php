<?php

class AdminController extends ControllerBase
{

    public function indexAction()
    {
        $this->dispatcher->forward(array(
            "controller" => "admin",
            "action" => "getBooks"
        ));


    }

    public function getBooksAction()
    {
        $books = Books::find();
        $this->view->setVar("books", $books);
    }

    public function getUsersAction()
    {
        $users = Users::find();
        $discounts = Discount::find();
        $this->view->setVar("users", $users);
        $this->view->setVar("discounts", $discounts);


    }

    public function changeDiscountAction()
    {
        if ( $this->request->isPost() && $this->request->isAjax())
        {
            $idUser = $this->request->getPost("idUser");
            $idDiscount = $this->request->getPost("idDiscount");
            if ( 'null' === $idDiscount )
            {
                $idDiscount = null;
            }
            else
            {
                $idDiscount = $this->filter->sanitize($idDiscount, "int");
            }
            $idUser = $this->filter->sanitize($idUser, "int");
            $user = Users::findFirstByidUser($idUser);
            $user->setDiscountIdDiscount($idDiscount);
            $user->save();
        }
    }

    public function changeStatusAction()
    {
        if ( $this->request->isPost() && $this->request->isAjax())
        {
            $idStatus = $this->request->getPost("idStatus");
            $idOrder = $this->request->getPost("idOrder");
            $idStatus = $this->filter->sanitize($idStatus, "int");
            $idOrder = $this->filter->sanitize($idOrder, "int");
            $order = Orders::findFirstByidOrders($idOrder);
            $order->setStatusIdstatus($idStatus);
            $order->save();
        }
    }

    public function getOrdersAction()
    {
        $orders = Orders::find();
        $arrayItemsOrder = array();
        $arrayStatus = array();
        foreach ($orders as $order)
        {
            $orderId = $order->getIdOrders();
            $statusId = $order->getStatusIdstatus();
            $itemsForOrder = $this->modelsManager->createBuilder()
                ->from('ItemsOrder')
                ->addFrom('Books')
                ->where('ItemsOrder.Books_idBook = Books.idBook')
                ->andWhere("ItemsOrder.Orders_idOrders = $orderId")
                ->getQuery()
                ->execute();

            $status = Status::findFirstByIdStatus($statusId);
            $arrayItemsOrder[$orderId] = $itemsForOrder;
            $arrayStatus[$orderId] = $status->getIdstatus();
        }
        $status = Status::find();
        $this->view->setVar('statuses', $status);
        $this->view->setVar("orders", $orders);
        $this->view->setVar("itemsOrder", $arrayItemsOrder);
        $this->view->setVar("status", $arrayStatus);

    }

    public function removeBookAction($idBook)
    {
        $idBook = $this->filter->sanitize($idBook, "int");
        $book = Books::findFirstByidBook($idBook);
        if ($book)
        {
            $shoppingCart = ShoppingCart::findFirst(array(
                'conditions' => 'Books_idBook = ?0',
                'bind' => array($idBook)
            ));

            $order = ItemsOrder::findFirst(array(
                'conditions' => 'Books_idBook = ?0',
                'bind' => array($idBook)
            ));

            if ( $shoppingCart || $order)
            {
                $this->flashSession->error("Can not remove this book. Someone has already bought it.");
            }
            else
            {
                $book->delete();
                $this->flashSession->success("Book has removed.");
            }
            return $this->response->redirect('admin/index');

        }
        else
        {
            return $this->response->redirect('admin/index');
        }
    }

    public function editAction($idBook)
    {
        if ( $this->request->isPost() )
        {
            $idBook = $this->request->getPost("idBook");
            $name = $this->request->getPost("name");
            $description = $this->request->getPost("description");
            $price = $this->request->getPost("price");
            $idBook =  $this->filter->sanitize($idBook, "int");
            $description =  $this->filter->sanitize($description, "string");
            $price =  $this->filter->sanitize($price, "float");
            $name = $this->filter->sanitize($name, "string");

            $book = Books::findFirst($idBook);
            $book->setDescription($description);
            $book->setName($name);
            $book->setPrice($price);
            $book->save();

            $idAuthor = $this->request->getPost("authorId");
            $idLanguage = $this->request->getPost("languageId");
            $author = BooksHasAuthors::findFirst(array(
                        'conditions' => 'Books_idBook = ?0',
                        'bind' => array($idBook)
                        ));
            $author->setAuthorsIdAuthors($idAuthor);
            $author->delete();
            $newAuthor = new BooksHasAuthors();
            $newAuthor->setBooksIdBook($idBook);
            $newAuthor->setAuthorsIdAuthors($idAuthor);
            $newAuthor->save();

            $language = BooksHasLanguage::findFirst(array(
                        'conditions' => 'Books_idBook = ?0',
                        'bind' => array($idBook)
                        ));
            $language->delete();
            $newLanguage = new BooksHasLanguage();
            $newLanguage->setBooksIdBook($idBook);
            $newLanguage->setLanguageIdLanguage($idLanguage);
            $newLanguage->save();
            $this->flashSession->success("Book has edited.");
            return $this->response->redirect('admin/index');
        }
        else
        {
            $idBook = $this->filter->sanitize($idBook, "int");
            $book = Books::findFirst($idBook);
            if ($book)
            {
                foreach ($book->booksHasLanguage as $language)
                {
                    $this->view->setVar('idLanguage', $language->language->getIdLanguage());
                    break;
                }
                foreach ($book->booksHasAuthors as $author)
                {
                    $this->view->setVar('idAuthor', $author->authors->getIdAuthors());
                    break;
                }
                $this->view->setVar("book", $book);
                $this->view->setVar("languages", Language::find());
                $this->view->setVar("authors", Authors::find());
            }
            else
            {
                return $this->response->redirect('admin/index');
            }
        }

    }

    public function addAction()
    {
        $this->view->setVar("saveValue", array('', '', ''));
        if ( $this->request->isPost() )
        {
            $name = $this->request->getPost("name");
            $description = $this->request->getPost("description");
            $price = $this->request->getPost("price");
            $description =  $this->filter->sanitize($description, "string");
            $price =  $this->filter->sanitize($price, "float");
            $name = $this->filter->sanitize($name, "string");

            if ($this->request->hasFiles() == true)
            {
                $book = new Books();
                $book->setDescription($description);
                $book->setName($name);
                $book->setPrice($price);
                if ( $book->save() )
                {
                    $idBook = $book->getIdBook();
                    $idAuthor = $this->request->getPost("authorId");
                    $idLanguage = $this->request->getPost("languageId");

                    $newAuthor = new BooksHasAuthors();
                    $newAuthor->setBooksIdBook($idBook);
                    $newAuthor->setAuthorsIdAuthors($idAuthor);
                    $newAuthor->save();

                    $newLanguage = new BooksHasLanguage();
                    $newLanguage->setBooksIdBook($idBook);
                    $newLanguage->setLanguageIdLanguage($idLanguage);
                    $newLanguage->save();
                foreach ($this->request->getUploadedFiles() as $file)
                {
                    $file->moveTo('img/small images/' . $idBook . '.jpg');

                }
                copy("img/small images/$idBook.jpg", "img/origin images/$idBook.jpg");
                $this->flashSession->success("Book has added.");
                return $this->response->redirect('admin/index');
                    
                }
            }
            else
            {
                $this->flashSession->error("Upload image pls.");
                $this->view->setVar("saveValue", array($name, $description, $price));
                //return $this->response->redirect('admin/add');
            }


        }
            $this->view->setVar("languages", Language::find());
            $this->view->setVar("authors", Authors::find());


    }

}

