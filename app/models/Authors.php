<?php

class Authors extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idAuthors;

    /**
     *
     * @var string
     */
    protected $Name;

    /**
     * Method to set the value of field idAuthors
     *
     * @param integer $idAuthors
     * @return $this
     */
    public function setIdAuthors($idAuthors)
    {
        $this->idAuthors = $idAuthors;

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
     * Returns the value of field idAuthors
     *
     * @return integer
     */
    public function getIdAuthors()
    {
        return $this->idAuthors;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idAuthors', 'BooksHasAuthors', 'Authors_idAuthors', array('alias' => 'BooksHasAuthors'));
    }

}
