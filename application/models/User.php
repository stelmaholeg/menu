<?php

class Application_Model_User extends Quani_Model
{
    public function __construct($id = null) {
        parent::__construct(new Application_Model_DbTable_Users, $id);
    }
    
    public function getAllUsers() 
    {
        return $this->_dbTable->fetchAll();
    }
    
    public function populateForm() 
    {
        return $this->_row->toArray();
    }
    
    public function sendActivationEmail()
    {
        $mail = new Quani_Mail();
        $mail->addTo($this->_row->email);
        $mail->setSubject('Активация аккаунта');
        $mail->setBodyView('activation',array('user' => $this));
        $mail->send();
    }
}

