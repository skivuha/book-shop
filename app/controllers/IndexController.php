<?php

class IndexController extends ControllerBase
{

    public function show404Action()
    {
        $this->response->setStatusCode(404, 'Not Found');
        $this->view->pick('index/404');
    }

    public function indexAction()
    {
        $this->dispatcher->forward(array(
            "controller" => "index",
            "action" => "search"
        ));

    }

    public function searchAction()
    {

        $currentPage = $this->request->getQuery('page', 'int');

       $books = Books::find();

        $paginator = new \Phalcon\Paginator\Adapter\Model(
            array(
                "data" => $books,
                "limit"=> 6,
                "page" => $currentPage
            )
        );

        $getAuthors =  Authors::find();
        if ( $getAuthors )
        {
            $this->view->setVar("authors", $getAuthors);
        }

        $getLenguages =  Language::find();
        if ( $getLenguages )
        {
            $this->view->setVar("languages", $getLenguages);
        }

        $page = $paginator->getPaginate();
        $this->view->setVar("pages", $page);
        $this->view->setVar("imagePath", 'img/small images/');

    }

    public function detailAction($id, $secondParam)
    {
        if ( null === $id)
        {
            return $this->response->redirect('index/detail/1');
        }

        $id = $this->filter->sanitize($id, "int");
        $getBook = Books::findFirst($id);
        //echo $getBook.getName();
        if ( !$getBook )
        {
            $this->response->redirect('');
            $this->view->pick('');
        }
        else
        {
            $arrayLanguages = array();
            $arrayAuthors = array();
            foreach ($getBook->booksHasLanguage as $language)
            {
                array_push($arrayLanguages, $language->language->getName());
            }
            foreach ($getBook->booksHasAuthors as $author)
            {
                array_push($arrayAuthors, $author->authors->getName());
            }
            if ( substr_count($secondParam, 'Language') > 0 )
            {
                $this->view->setVar('backToLanguage', true);
            }
            elseif ( substr_count($secondParam, 'search') > 0 )
            {

                $this->view->setVar('backToSearch', true);
            }
            $secondParam = $this->filter->sanitize($secondParam, "int");
            $this->view->setVar("book", $getBook);
            $this->view->setVar("languages", $arrayLanguages);
            $this->view->setVar("secondParam", $secondParam);
            $this->view->setVar("authors", $arrayAuthors);
            $this->view->setVar("imagePath", 'img/origin images/');
        }

    }

    public function authorsListAction($idAuthor = null)
    {
        if ( $idAuthor != null)
        {
            $idAuthor = $this->filter->sanitize($idAuthor, "int");
            $author = Authors::findFirst($idAuthor);
            if ( !$author )
            {
                $this->response->redirect('');
            }
            else
            {
                $arrayBooks = array();
                foreach ($author->booksHasAuthors as $book)
                {
                    array_push($arrayBooks, $book->books);
                }
                $this->view->setVar('authorView', true);
                $this->view->setVar("name", $author->getName());
                $this->view->setVar("id", 'idAuthor=' . $idAuthor);
                $this->view->setVar("imagePath", 'img/small images/');
                $this->view->setVar("books", $arrayBooks);
                $this->view->pick('index/filterBooks');
            }


        }
        else
        {
            $this->response->redirect('');
        }
    }

    public function languagesListAction($idLanguage = null)
    {

        if ( $idLanguage != null)
        {
            $idLanguage = $this->filter->sanitize($idLanguage, "int");
            $language = Language::findFirst($idLanguage);
            if ( !$language )
            {
                $this->response->redirect('');
            }
            else
            {
                $arrayBooks = array();
                foreach ($language->booksHasLanguage as $book)
                {
                    array_push($arrayBooks, $book->books);
                }
                $this->view->setVar('languageView', true);
                $this->view->setVar("name", $language->getName());
                $this->view->setVar("id", 'idLanguage=' . $idLanguage);
                $this->view->setVar("imagePath", 'img/small images/');
                $this->view->setVar("books", $arrayBooks);
                $this->view->pick('index/filterBooks');
            }


        }
        else
        {
            $this->response->redirect('');
        }
    }





}

