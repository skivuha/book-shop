<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    private $sessionValue;
    private $totalSum;
    private $lang;

    protected function getValue()
    {
        return $this->sessionValue;
    }

    protected function getTotalSum()
    {
        return round($this->totalSum, 2);
    }

    private function _getTranslation()
    {
        if ( $this->cookies->has("lang-user3") )
        {
            $cookie = $this->cookies->get("lang-user3");

            $language = trim($cookie->getValue());

        }
        else
        {
            $language = strtolower($this->request->getBestLanguage());
            if ( strpos($language, '-') != false)
            {
                $language = strtok($language, '-');
            }
        }

        $this->lang = $language;
        if ( $language === 'ru') {
            require_once dirname(__FILE__)."/../languages/ru.php";
        }
        else {
            require_once dirname(__FILE__)."/../languages/en.php";
        }

        // Возвращение объекта работы с переводом
        return new \Phalcon\Translate\Adapter\NativeArray(array(
            "content" => $messages
        ));



    }


    protected function initialize()    {

        $this->view->setVar("t", $this->_getTranslation());
        if ( $this->lang === 'ru')
        {
            $this->view->setVar('selectedRu', 'selected');
            $this->view->setVar('selectedEn', '');
        }
        else
        {
            $this->view->setVar('selectedEn', 'selected');
            $this->view->setVar('selectedRu', '');
        }
        $this->view->setVar('total', 0);
        $this->view->setVar('summary', 0.00);
        if ( $this->cookies->has('user_idUser3') )
        {
            $cookie = $this->cookies->get('user_idUser3');
            $this->session->set('user_id', trim($cookie->getValue()));
        }

        if ( $this->session->has("user_id") ) {
            $this->sessionValue = $this->session->get("user_id");
            // $total = Shoppingcart::count("Users_idUser = $this->sessionValue");
            $total = ShoppingCart::sum(array(
                "column" => "Count",
                "conditions" => "Users_idUser = $this->sessionValue"
            ));

            $summary = Shoppingcart::sum(array(
                "column" => "Price",
                "conditions" => "Users_idUser = $this->sessionValue"
            ));
            $this->totalSum = $summary;
            if ($total)
            {
                $this->view->setVar('total', $total);
            }

            if ($summary)
            {
                $this->view->setVar('summary', round($summary, 2));
            }

            $user = Users::findFirst( $this->sessionValue);
            $nameUser = $user->getLogin();
            $this->view->setVar('sessionOn', true);
            $this->view->setVar('nameUser', $nameUser);

        }
    }
}
