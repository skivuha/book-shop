<?php

class Discount extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idDiscount;

    /**
     *
     * @var double
     */
    protected $Value;

    /**
     *
     * @var string
     */
    protected $Name;

    /**
     * Method to set the value of field idDiscount
     *
     * @param integer $idDiscount
     * @return $this
     */
    public function setIddiscount($idDiscount)
    {
        $this->idDiscount = $idDiscount;

        return $this;
    }

    /**
     * Method to set the value of field Value
     *
     * @param double $Value
     * @return $this
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

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
     * Returns the value of field idDiscount
     *
     * @return integer
     */
    public function getIddiscount()
    {
        return $this->idDiscount;
    }

    /**
     * Returns the value of field Value
     *
     * @return double
     */
    public function getValue()
    {
        return $this->Value;
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
        $this->hasMany('idDiscount', 'Users', 'Discount_idDiscount', array('alias' => 'Users'));
    }

}
