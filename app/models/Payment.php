<?php

class Payment extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idPayment;

    /**
     *
     * @var string
     */
    protected $Name;

    /**
     * Method to set the value of field idPayment
     *
     * @param integer $idPayment
     * @return $this
     */
    public function setIdPayment($idPayment)
    {
        $this->idPayment = $idPayment;

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
     * Returns the value of field idPayment
     *
     * @return integer
     */
    public function getIdPayment()
    {
        return $this->idPayment;
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
        $this->hasMany('idPayment', 'Orders', 'Payment_idPayment', array('alias' => 'Orders'));
    }

}
