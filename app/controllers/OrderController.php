<?php

class OrderController extends ControllerBase
{

    public function addAction($idBook)
    {
        if (!$this->session->has("user_id"))
        {
            $this->flashSession->notice("Login firstly pls!");
            return $this->response->redirect('account/login');
        }
        $filter = new \Phalcon\Filter();
        $idBook = $filter->sanitize($idBook, "int");
        $books = Books:: find();
        $flag = false;
        foreach ($books as $book) {
            if ($idBook == $book->getIdBook())
            {
                $price = $book->getPrice();
                $flag = true;
                break;
            } else
            {
                continue;
            }
        }

        if (false === $flag) {
            return $this->response->redirect('');
        }

        $userId = parent::getValue();

        $shopCard = ShoppingCart::findFirst(array(
                    'conditions' => 'Users_idUser = ?0 AND Books_idBook = ?1',
                    'bind' => array($userId,$idBook)
                    ));


        if ( is_bool($shopCard) )
        {
            $shoppingCart = new Shoppingcart();
            $shoppingCart->setCount(1);
            $shoppingCart->setPrice($price);
            $shoppingCart->setBooksIdBook($idBook);
            $shoppingCart->setUsersIdUser($userId);
            $shoppingCart->save();

        } else
        {
            $count = $shopCard->getCount();
            $shopCard->setCount($count + 1);
            $shopCard->save();
            $count = $shopCard->getCount();
            $shopCard->SetPrice($price * $count);
            $shopCard->save();
        }

        $this->response->redirect('');
    }

    public function CartAction()
    {
        if ( $this->session->has("user_id") )
        {
            $userId = parent::getValue();


            $shopCard = $this->modelsManager->createBuilder()
                ->from('ShoppingCart')
                ->addFrom('Books')
                ->where('ShoppingCart.Books_idBook = Books.idBook')
                ->andWhere("ShoppingCart.Users_idUser = $userId")
                ->getQuery()
                ->execute();


            if ( $shopCard )
            {
                $this->view->setVar('shopCard', $shopCard);
            }

        }

        else
        {
            $this->flashSession->notice("Login firstly pls!");
            $this->response->redirect('account/login');
        }
    }
}

