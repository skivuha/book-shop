<?php

class BooksHasAuthors extends \Phalcon\Mvc\Model
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
    protected $Authors_idAuthors;

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
     * Method to set the value of field Authors_idAuthors
     *
     * @param integer $Authors_idAuthors
     * @return $this
     */
    public function setAuthorsIdAuthors($Authors_idAuthors)
    {
        $this->Authors_idAuthors = $Authors_idAuthors;

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
     * Returns the value of field Authors_idAuthors
     *
     * @return integer
     */
    public function getAuthorsIdAuthors()
    {
        return $this->Authors_idAuthors;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('Authors_idAuthors', 'Authors', 'idAuthors', array('alias' => 'Authors'));
        $this->belongsTo('Books_idBook', 'Books', 'idBook', array('alias' => 'Books'));
    }

}
