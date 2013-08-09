<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
        $moduleLoader = new Zend_Application_Module_Autoloader(array(
            'namespace' => '',
            'basePath'  => APPLICATION_PATH
        ));
        
        $autoloader= Zend_Loader_Autoloader::getInstance();
        $autoloader->registerNamespace(array('Quani_'));
        return $moduleLoader;
    }
    protected function _initViewHelpers(){
       error_reporting(E_ALL);
        ini_set("display_errors", 1);        
       $this->bootstrap('layout');
        $layout = $this->getResource('layout');
        $view = $layout->getView();
        
        $view->headMeta()->appendHttpEquiv('Content-Type','text/html;charset=utf-8');
        $view->headTitle('Quani');
        $view->headTitle()->setSeparator(' :: ');        
    }
            

}

