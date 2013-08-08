<?php
class UsersController extends Zend_Controller_Action{
    
    public function indexAction(){
        $this->view->title = "Список пользователей.";
        $this->view->headTitle($this->view->title, 'PREPEND');
    }
    
    public function addAction(){
        $this->view->title = "Добавить нового пользователя.";
        $this->view->headTitle($this->view->title, 'PREPEND');
        $form = new Application_Form_User;
        $this->view->form = $form;
    }
    
    public function deleteAction(){
        
    }
    
    public function viewAction(){
        $this->view->title = "Просмотр данных пользователя.";
        $this->view->headTitle($this->view->title, 'PREPEND');
    }
    public function editAction(){
        $this->view->title = "Редактировать данные пользователя.";
        $this->view->headTitle($this->view->title, 'PREPEND');
    }
}
?>
