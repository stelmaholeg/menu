<?php

class Application_Form_Registration extends Zend_Form
{

  public function __construct()
    {
        $this->setName('form_registration');
        parent::__construct();
        
        $username   = new Zend_Form_Element_Text('username');
        $username->setLabel('Логин')
                ->setRequired(true)
                ->addValidator('NotEmpty')
                ->addValidator('Alnum')
                ->addValidator('Db_NoRecordExists', false, array(
                    'table' => 'users',
                    'field' => 'username'
                ))
                ->addFilter('StringTrim')
                ->addFilter('StripTags');
        
        $name   = new Zend_Form_Element_Text('name');
        $name->setLabel('Имя')
                ->setRequired(true);
        
        $surname   = new Zend_Form_Element_Text('surname');
        $surname->setLabel('Фамилия')
                ->setRequired(true);
        
        
        $password   = new Zend_Form_Element_Password('password');
        $password->setLabel('Пароль')
                ->setRequired(true)
                ->addValidator('NotEmpty');
        
        $password_confirm   = new Zend_Form_Element_Password('password_confirm');
        $password_confirm->setLabel('Введите пароль еще раз')
                ->setRequired(true)
                ->addValidator('NotEmpty')
                ->addPrefixPath('Quani_Validator','Quani/Validator','validate')
                ->addValidator('Passwordconfirm');
        
        $email      = new Zend_Form_Element_Text('email');
        $email->setLabel('Email')                
                ->addValidator('EmailAddress');
        $submit     = new Zend_Form_Element_Submit('submit');   
        $submit->setLabel('Добавить');               
                
        $this->addElements(array($username, $name, $surname, $password, $password_confirm, $email, $submit));        
    }


}

