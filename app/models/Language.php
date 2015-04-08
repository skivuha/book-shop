<?php

class Language extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idLanguage;

    /**
     *
     * @var string
     */
    protected $Name;

    /**
     * Method to set the value of field idLanguage
     *
     * @param integer $idLanguage
     * @return $this
     */
    public function setIdLanguage($idLanguage)
    {
        $this->idLanguage = $idLanguage;

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
     * Returns the value of field idLanguage
     *
     * @return integer
     */
    public function getIdLanguage()
    {
        return $this->idLanguage;
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
        $this->hasMany('idLanguage', 'BooksHasLanguage', 'Language_idLanguage', array('alias' => 'BooksHasLanguage'));
    }

}
