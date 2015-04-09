<?php

class Itemsorder extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idItemsOrder;

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
    protected $Books_idBook;

    /**
     *
     * @var integer
     */
    protected $Orders_idOrders;

    /**
     * Method to set the value of field idItemsOrder
     *
     * @param integer $idItemsOrder
     * @return $this
     */
    public function setIdItemsOrder($idItemsOrder)
    {
        $this->idItemsOrder = $idItemsOrder;

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
     * Method to set the value of field Orders_idOrders
     *
     * @param integer $Orders_idOrders
     * @return $this
     */
    public function setOrdersIdOrders($Orders_idOrders)
    {
        $this->Orders_idOrders = $Orders_idOrders;

        return $this;
    }

    /**
     * Returns the value of field idItemsOrder
     *
     * @return integer
     */
    public function getIdItemsOrder()
    {
        return $this->idItemsOrder;
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
     * Returns the value of field Books_idBook
     *
     * @return integer
     */
    public function getBooksIdBook()
    {
        return $this->Books_idBook;
    }

    /**
     * Returns the value of field Orders_idOrders
     *
     * @return integer
     */
    public function getOrdersIdOrders()
    {
        return $this->Orders_idOrders;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('Books_idBook', 'Books', 'idBook', array('alias' => 'Books'));
        $this->belongsTo('Orders_idOrders', 'Orders', 'idOrders', array('alias' => 'Orders'));
    }

}
