<?php

class Application_Form_User extends Zend_Form
{

  public function __construct()
    {
        $this->setName('form_user');
        parent::__construct();
        
        $username   = new Zend_Form_Element_Text('username');
        $username->setLabel('Логин')
                ->setRequired(true)
                ->addValidator('NotEmpty')
                ->addValidator('Alnum')
                ->addFilter('StringTrim')
                ->addFilter('StripTags');
        $name   = new Zend_Form_Element_Text('name');
        $name->setLabel('Имя');
        $surname   = new Zend_Form_Element_Text('surname');
        $surname->setLabel('Фамилия');
        $password   = new Zend_Form_Element_Password('password');
        $password->setLabel('Пароль')
                ->setRequired(true)
                ->addValidator('NotEmpty');
        $email      = new Zend_Form_Element_Text('email');
        $email->setLabel('Email')                
                ->addValidator('EmailAddress');
        $submit     = new Zend_Form_Element_Submit('submit');   
        $submit->setLabel('Добавить');               
                
        $this->addElements(array($username, $name, $surname, $password, $email, $submit));        
    }


}

