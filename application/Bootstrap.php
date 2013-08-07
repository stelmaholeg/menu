<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initViewHelpers(){
       error_reporting(E_ALL);
        ini_set("display_errors", 1);        
       $this->bootstrap('layout');
        $layout = $this->getResource('layout');
        $view = $layout->getView();
        
        $view->headMeta()->appendHttpEquiv('Content-Type','text/html;charset=utf-8');
        $view->headTitle('SimpleBlog');
        $view->headTitle()->setSeparator(' :: ');        
    }
            

}

