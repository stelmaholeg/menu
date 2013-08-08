<?php

class Application_Form_User extends Zend_Form
{

  public function __construct()
    {
        $this->setName('form_user');
        parent::__construct();
        
        $username   = new Zend_Form_Element_Text('username');
        $password   = new Zend_Form_Element_Password('password');
        $email      = new Zend_Form_Element_Text('email');
        $submit     = new Zend_Form_Element_Submit('submit');   
        
        $this->addElements(array($username, $password, $email, $submit));        
    }


}

