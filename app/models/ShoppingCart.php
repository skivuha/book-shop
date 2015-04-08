<?php

class Shoppingcart extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idShoppingCart;

    /**
     *
     * @var integer
     */
    protected $Count;

    /**
     *
     * @var double
     */
    protected $Price;

    /**
     *
     * @var integer
     */
    protected $Users_idUser;

    /**
     *
     * @var integer
     */
    protected $Books_idBook;

    /**
     * Method to set the value of field idShoppingCart
     *
     * @param integer $idShoppingCart
     * @return $this
     */
    public function setIdShoppingCart($idShoppingCart)
    {
        $this->idShoppingCart = $idShoppingCart;

        return $this;
    }

    /**
     * Method to set the value of field Count
     *
     * @param integer $Count
     * @return $this
     */
    public function setCount($Count)
    {
        $this->Count = $Count;

        return $this;
    }

    /**
     * Method to set the value of field Price
     *
     * @param double $Price
     * @return $this
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * Method to set the value of field Users_idUser
     *
     * @param integer $Users_idUser
     * @return $this
     */
    public function setUsersIdUser($Users_idUser)
    {
        $this->Users_idUser = $Users_idUser;

        return $this;
    }

    /**
     * Method to set the value of field Books_idBook
     *
     * @param integer $Books_idBook
     * @return $this
     */
    public function setBooksIdBook($Books_idBook)
    {
        $this->Books_idBook = $Books_idBook;

        return $this;
    }

    /**
     * Returns the value of field idShoppingCart
     *
     * @return integer
     */
    public function getIdShoppingCart()
    {
        return $this->idShoppingCart;
    }

    /**
     * Returns the value of field Count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * Returns the value of field Price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Returns the value of field Users_idUser
     *
     * @return integer
     */
    public function getUsersIdUser()
    {
        return $this->Users_idUser;
    }

    /**
     * Returns the value of field Books_idBook
     *
     * @return integer
     */
    public function getBooksIdBook()
    {
        return $this->Books_idBook;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('Books_idBook', 'Books', 'idBook', array('alias' => 'Books'));
        $this->belongsTo('Users_idUser', 'Users', 'idUser', array('alias' => 'Users'));
    }

}
