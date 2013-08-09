<?php
class UsersController extends Zend_Controller_Action{
    
    public function indexAction(){
        $this->view->title = "Список пользователей.";
        $this->view->headTitle($this->view->title, 'PREPEND');
        
        $user = new Application_Model_User();
        $this->view->users = $user->getAllUsers();       
    }
    
    public function addAction(){
        $this->view->title = "Добавить нового пользователя.";
        $this->view->headTitle($this->view->title, 'PREPEND');
        $form = new Application_Form_User();
        
        
       if ($this->getRequest()->isPost()){
           
            if($form->isValid($this->getRequest()->getPost())){
                $user = new Application_Model_User();
                $user->fill($form->getValues());
                $user->created = date('Y-m-d H:i:s');
                $user->password = sha1($user->password);
                $user->save();
                $this->_helper->redirector('index');
            }
        }
        
        $this->view->form = $form;
    }
    
    public function deleteAction(){
        $id = $this->_getAllParams('id');
        $user = new Application_Model_User($id);
        $user->delete();
        $this->_helper->redirector('index');
    }
    
    public function viewAction(){
        $this->view->title = "Просмотр данных пользователя.";
        $this->view->headTitle($this->view->title, 'PREPEND');
        
        $id = $this->_getParam('id');
        $user = new Application_Model_User($id);
        $this->view->user = $user;
    }
    public function editAction(){
        $this->view->title = "Редактировать данные пользователя.";
        $this->view->headTitle($this->view->title, 'PREPEND');
        
        $id = $this->_getParam('id');
        $user = new Application_Model_User($id);
        $form = new Application_Form_User();
        
        if ($this->getRequest()->isPost()){
            if ($form->isValid($this->getRequest()->getPost())){
                $user->fill($form->getValues());
                $user->modified = date('Y-m-d H:i:s');
                $user->save();
                $this->_helper->redirector('index');
            }
        } else {
            $form->populate($user->populateForm());
            
        }
        $this->view->form = $form;
    }
}
?>
