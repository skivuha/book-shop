<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    private $sessionValue;
    private $totalSum;


    protected function getValue()
    {
        return $this->sessionValue;
    }

    protected function getTotalSum()
    {
        return round($this->totalSum, 2);
    }

    protected function initialize()
    {
        $this->view->setVar('total', 0);
        $this->view->setVar('summary', 0.00);
        if ( $this->cookies->has('user_id') )
        {
            $cookie = $this->cookies->get('user_id');
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
