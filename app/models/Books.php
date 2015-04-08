<?php

class Books extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idBook;

    /**
     *
     * @var string
     */
    protected $Name;

    /**
     *
     * @var string
     */
    protected $Description;

    /**
     *
     * @var double
     */
    protected $Price;

    /**
     * Method to set the value of field idBook
     *
     * @param integer $idBook
     * @return $this
     */
    public function setIdBook($idBook)
    {
        $this->idBook = $idBook;

        return $this;
    }

    /**
     * Method to set the value of field Name
     *
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Method to set the value of field Description
     *
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

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
     * Returns the value of field idBook
     *
     * @return integer
     */
    public function getIdBook()
    {
        return $this->idBook;
    }

    /**
     * Returns the value of field Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Returns the value of field Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idBook', 'BooksHasAuthors', 'Books_idBook', array('alias' => 'BooksHasAuthors'));
        $this->hasMany('idBook', 'BooksHasLanguage', 'Books_idBook', array('alias' => 'BooksHasLanguage'));
        $this->hasMany('idBook', 'Itemsorder', 'Books_idBook', array('alias' => 'Itemsorder'));
        $this->hasMany('idBook', 'ShoppingCart', 'Books_idBook', array('alias' => 'ShoppingCart'));
    }

}
