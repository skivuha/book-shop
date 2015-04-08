<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Confirmation;
use Phalcon\Validation\Validator\StringLength;


class MyValidation extends Validation
{
    private $filter;

    public function initialize()
    {
        $this->filter = new \Phalcon\Filter();
    }

    public function filterRegistrationForm($postArray)
    {

        $array = $postArray;
        $array['name'] =  $this->filter->sanitize($array['name'], "trim");
        $array['name'] = $this->filter->sanitize($array['name'], "string");
        $array['email'] =  $this->filter->sanitize($array['email'], "trim");
        $array['email'] = $this->filter->sanitize($array['email'], "email");
        $array['password'] =  $this->filter->sanitize($array['password'], "trim");
        $array['password'] = $this->filter->sanitize($array['password'], "string");
        $array['confirmPasswd'] = $this->filter->sanitize($array['confirmPasswd'], "trim");
        $array['confirmPasswd'] = $this->filter->sanitize($array['confirmPasswd'], "string");

        return $array;

    }

    public function validationRegistrationForm()
    {
        $this->add('name', new StringLength(array(
            'max' => 50,
            'min' => 2,
            'messageMaximum' => 'We don\'t like really long names',
            'messageMinimum' => 'More that just 2 symbols for name'
        )));

        $this->add('email', new Email(array(
            'message' => 'Invalid email'
        )));

        $this->add('password', new StringLength(array(
            'max' => 50,
            'min' => 6,
            'messageMaximum' => 'We don\'t like really long passwprd',
            'messageMinimum' => 'More that just 6 symbols for password'
        )));


        $this->add('confirmPassword', new Confirmation(array(
            'message' => 'Password doesn\'t match confirmation',
            'with' => 'password'
        )));

    }

    public function filterLoginForm($postArray)
    {

        $array = $postArray;
        $array['name'] =  $this->filter->sanitize($array['name'], "trim");
        $array['name'] = $this->filter->sanitize($array['name'], "string");
        $array['password'] =  $this->filter->sanitize($array['password'], "trim");
        $array['password'] = $this->filter->sanitize($array['password'], "string");

        return $array;

    }

    public function validationLoginForm()
    {
        $this->add('name', new StringLength(array(
            'max' => 50,
            'min' => 2,
            'messageMaximum' => 'We don\'t like really long names',
            'messageMinimum' => 'More that just 2 symbols for name'
        )));



        $this->add('password', new StringLength(array(
            'max' => 50,
            'min' => 6,
            'messageMaximum' => 'We don\'t like really long passwprd',
            'messageMinimum' => 'More that just 6 symbols for password'
        )));

    }

} 