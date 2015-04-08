<?php

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idUser;

    /**
     *
     * @var string
     */
    protected $Login;

    /**
     *
     * @var string
     */
    protected $Email;

    /**
     *
     * @var string
     */
    protected $Password;

    /**
     *
     * @var integer
     */
    protected $Discount_idDiscount;

    /**
     * Method to set the value of field idUser
     *
     * @param integer $idUser
     * @return $this
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Method to set the value of field Login
     *
     * @param string $Login
     * @return $this
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Method to set the value of field Email
     *
     * @param string $Email
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Method to set the value of field Password
     *
     * @param string $Password
     * @return $this
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Method to set the value of field Discount_idDiscount
     *
     * @param integer $Discount_idDiscount
     * @return $this
     */
    public function setDiscountIdDiscount($Discount_idDiscount)
    {
        $this->Discount_idDiscount = $Discount_idDiscount;

        return $this;
    }

    /**
     * Returns the value of field idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Returns the value of field Login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Returns the value of field Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Returns the value of field Password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Returns the value of field Discount_idDiscount
     *
     * @return integer
     */
    public function getDiscountIdDiscount()
    {
        return $this->Discount_idDiscount;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idUser', 'Orders', 'Users_idUser', array('alias' => 'Orders'));
        $this->hasMany('idUser', 'ShoppingCart', 'Users_idUser', array('alias' => 'ShoppingCart'));
        $this->belongsTo('Discount_idDiscount', 'Discount', 'idDiscount', array('alias' => 'Discount'));
    }

}
