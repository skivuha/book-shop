<?php

class BooksHasLanguage extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $Books_idBook;

    /**
     *
     * @var integer
     */
    public $Language_idLanguage;

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
     * Method to set the value of field Language_idLanguage
     *
     * @param integer $Language_idLanguage
     * @return $this
     */
    public function setLanguageIdLanguage($Language_idLanguage)
    {
        $this->Language_idLanguage = $Language_idLanguage;

        return $this;
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
     * Returns the value of field Language_idLanguage
     *
     * @return integer
     */
    public function getLanguageIdLanguage()
    {
        return $this->Language_idLanguage;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('Books_idBook', 'Books', 'idBook', array('alias' => 'Books'));
        $this->belongsTo('Language_idLanguage', 'Language', 'idLanguage', array('alias' => 'Language'));
    }

}
