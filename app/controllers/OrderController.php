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

    public function RemoveCartAction($idBook)
    {
         if ($this->request->isGet())
         {
            if ($this->request->isAjax())
            {
                if ( $idBook )
                {
                    $idBook = $this->filter->sanitize($idBook, "int");
                    $userId = parent::getValue();
                    $shopCard = ShoppingCart::findFirst(array(
                                 'conditions' => 'Users_idUser = ?0 AND Books_idBook = ?1',
                                 'bind' => array($userId,$idBook)
                    ));
                    if ( $shopCard == false )
                    {
                        $this->response->redirect('account/card');
                    }
                    else
                    {
                         if ($shopCard->delete() == false)
                         {
                            $this->response->redirect('');
                         }
                    }
                }                
            }
         }
    }

    public function ChangeCountAction($idBook, $action)
    {
        if ($this->request->isGet())
        {
            if ($this->request->isAjax())
            {
                if ( $idBook  )
                {
                    $idBook = $this->filter->sanitize($idBook, "int");
                    $action = $this->filter->sanitize($action, "string");
                    $userId = parent::getValue();
                    $shopCard = ShoppingCart::findFirst(array(
                                'conditions' => 'Users_idUser = ?0 AND Books_idBook = ?1',
                                'bind' => array($userId,$idBook)
                    ));
 
                    if ( $shopCard == false )
                    {
                       $this->response->redirect('acount/card');
                    }
                    else
                    {
                        $count = $shopCard->getCount();
                        if ( substr_count($action, 'plus') > 0 )
                        {
                             $price = $shopCard->getPrice();
                             $shopCard->SetPrice($price + $price / $count);
                             $shopCard->setCount($count + 1);
                              
                        }
                        else
                        {
                             if ( $count > 1 )
                             {
                                $price = $shopCard->getPrice();
                                $shopCard->SetPrice($price - $price / $count);
                                $shopCard->setCount($count - 1);
                             }
                        }
                        
                        if ( $shopCard->save() == true )
                        {
                            $this->response->redirect('');
                        }
                    }
        
                }
            }
        }
    }


    public function GetOrderAction()
    {
        if ( $this->session->has("user_id") && $this->request->isPost())
        {

                $userId = parent::getValue();
                $totalSum = parent::getTotalSum();
                $this->view->setVar('totalSum', $totalSum);
                $user = Users::findFirst(array(
                    'conditions' => "idUser =  $userId"
                ));

                if ( !$totalSum )
                {
                    return $this->response->redirect('order/cart');
                }

                if ( $user )
                {
                    $payment = Payment::Find();
                    $this->view->setVar('payment', $payment);
                    $discount = Discount::findFirstByIdDiscount($user->getDiscountIdDiscount());
                    if ( $discount )
                    {
                        $discountValue = $discount->getValue();
                        $this->view->setVar('discountValue', $discountValue);
                        $finalAmount = $totalSum - $totalSum * $discountValue / 100;
                        $finalAmount = round($finalAmount, 2);
                        $this->view->setVar('finalAmount', $finalAmount);


                    }

                    else
                    {

                    }
                }
        }
        else
        {
            return $this->response->redirect('index/index');
        }
    }

    public function GratsAction()
    {
        if ( $this->session->has("user_id") && $this->request->isPost() )
        {
            $userId = parent::getValue();
            $user = Users::findFirst(array(
                'conditions' => "idUser =  $userId"
            ));

            $paymentId = $this->filter->sanitize($this->request->getPost('group1'), "int");
            $discount = Discount::findFirstByIdDiscount($user->getDiscountIdDiscount());
            if ( $discount )
            {
                $discountValue = $discount->getValue();
                $finalAmount = parent::getTotalSum() - parent::getTotalSum() * $discountValue / 100;
                $finalAmount = round($finalAmount, 2);
            }
            else
            {
                $finalAmount = parent::getTotalSum();
            }
            $order = new Orders();
            $order->setDate( new \Phalcon\Db\RawValue('default'));
            $order->setSummary($finalAmount);
            $order->setUsersIduser($userId);
            $order->setStatusIdstatus(1);
            $order->setPaymentIdpayment($paymentId);
            $order->save();
            $lastInsertId = $order->getIdorders();

            $shopCard = ShoppingCart::find(array(
                'conditions' => 'Users_idUser = ?0',
                'bind' => array($userId)
            ));

            foreach ($shopCard as $item)
            {
                $itemOrder= new ItemsOrder();
                $itemOrder->setCount($item->getCount());
                $itemOrder->setPrice($item->getPrice());
                $itemOrder->setBooksIdbook($item->getBooksIdBook());
                $itemOrder->setOrdersIdOrders($lastInsertId);
                $itemOrder->save();
                $item->delete();
            }

        }
        else
        {
            return $this->response->redirect('index/index');
        }
    }
}

