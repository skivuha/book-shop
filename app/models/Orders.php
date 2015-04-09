<?php

class Orders extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idOrders;

    /**
     *
     * @var string
     */
    protected $Date;

    /**
     *
     * @var double
     */
    protected $Summary;

    /**
     *
     * @var integer
     */
    protected $Users_idUser;

    /**
     *
     * @var integer
     */
    protected $Status_idStatus;

    /**
     *
     * @var integer
     */
    protected $Payment_idPayment;

    /**
     * Method to set the value of field idOrders
     *
     * @param integer $idOrders
     * @return $this
     */
    public function setIdorders($idOrders)
    {
        $this->idOrders = $idOrders;

        return $this;
    }

    /**
     * Method to set the value of field Date
     *
     * @param string $Date
     * @return $this
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Method to set the value of field Summary
     *
     * @param double $Summary
     * @return $this
     */
    public function setSummary($Summary)
    {
        $this->Summary = $Summary;

        return $this;
    }

    /**
     * Method to set the value of field Users_idUser
     *
     * @param integer $Users_idUser
     * @return $this
     */
    public function setUsersIduser($Users_idUser)
    {
        $this->Users_idUser = $Users_idUser;

        return $this;
    }

    /**
     * Method to set the value of field Status_idStatus
     *
     * @param integer $Status_idStatus
     * @return $this
     */
    public function setStatusIdstatus($Status_idStatus)
    {
        $this->Status_idStatus = $Status_idStatus;

        return $this;
    }

    /**
     * Method to set the value of field Payment_idPayment
     *
     * @param integer $Payment_idPayment
     * @return $this
     */
    public function setPaymentIdpayment($Payment_idPayment)
    {
        $this->Payment_idPayment = $Payment_idPayment;

        return $this;
    }

    /**
     * Returns the value of field idOrders
     *
     * @return integer
     */
    public function getIdorders()
    {
        return $this->idOrders;
    }

    /**
     * Returns the value of field Date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Returns the value of field Summary
     *
     * @return double
     */
    public function getSummary()
    {
        return $this->Summary;
    }

    /**
     * Returns the value of field Users_idUser
     *
     * @return integer
     */
    public function getUsersIduser()
    {
        return $this->Users_idUser;
    }

    /**
     * Returns the value of field Status_idStatus
     *
     * @return integer
     */
    public function getStatusIdstatus()
    {
        return $this->Status_idStatus;
    }

    /**
     * Returns the value of field Payment_idPayment
     *
     * @return integer
     */
    public function getPaymentIdpayment()
    {
        return $this->Payment_idPayment;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idOrders', 'Itemsorder', 'Orders_idOrders', array('alias' => 'Itemsorder'));
        $this->belongsTo('Payment_idPayment', 'Payment', 'idPayment', array('alias' => 'Payment'));
        $this->belongsTo('Status_idStatus', 'Status', 'idStatus', array('alias' => 'Status'));
        $this->belongsTo('Users_idUser', 'Users', 'idUser', array('alias' => 'Users'));
    }

}
