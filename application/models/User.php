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

    
}

