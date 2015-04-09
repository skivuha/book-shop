<?php

class Status extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idStatus;

    /**
     *
     * @var string
     */
    protected $Name;

    /**
     * Method to set the value of field idStatus
     *
     * @param integer $idStatus
     * @return $this
     */
    public function setIdstatus($idStatus)
    {
        $this->idStatus = $idStatus;

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
     * Returns the value of field idStatus
     *
     * @return integer
     */
    public function getIdstatus()
    {
        return $this->idStatus;
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
        $this->hasMany('idStatus', 'Orders', 'Status_idStatus', array('alias' => 'Orders'));
    }

}
