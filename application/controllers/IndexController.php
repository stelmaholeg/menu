<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
       
       //  $qw = zend_version();
         //echo $qw;
        /* Initialize action controller here */
    }

    public function indexAction()
    {
            // action body
     //    $qw = zend_version();
       //  echo $qw;
        $this->view->headTitle('Главная','PREPEND');
    }


}

