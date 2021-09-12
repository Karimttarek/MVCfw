<?php

namespace PHPMVC\Controllers;

abstract class Controller
{

    protected $controller;
    protected $action;
    protected $params;


    public function notFound(){
        echo 'This page doesn\,t exists';
    }

    /**
     * Set Controller
     */
    public function setController($controller){
        $this->controller = $controller;
    }

    /**
     * Set Action
     */
    public function setAction($action){
        $this->action = $action;
    }

    /**
     * Set Parameters
     */
    public function setParams($params){
        $this->params = $params;
    }

    /**
     * Render View
     */
    protected function view()
    {
        echo $this->controller , $this->action;
    }
}