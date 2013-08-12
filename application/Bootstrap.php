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
    
    protected function _initEmail()
    {
        $email_confog = array(
            // указываем метод авторизации
            'auth' => 'login',
            // ваша почта на gamil
            'username' => 'stelmah.taganrog@gmail.com',
            // ваш пароль от почты
            'password' => '2809hfljcnysq',
            // метод щифрования
            'ssl' => 'ssl',
            // порт
            'port' => 465
        );
        // создаем объект SMPT transport - первый параметр: smtp сервер, воторой: наш конфиг
        $transport = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $email_confog);
        Zend_Mail::setDefaultTransport($transport);
    }
}

