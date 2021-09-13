<?php

namespace PHPMVC\App\Controllers;

use PHPMVC\FrontController;

abstract class Controller
{

    protected $controller;
    protected $action;
    protected $params;

    /**
     * Data variables
     */
    protected $data = [];
    /**
     * if action does not exist in controller
     * return Not Found page
     */
    public function notFound(){
        require_once RESOURCE_VIEW_PATH .  'notfound.php';
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
    protected function view($path)
    {   
        $view = VIEW_PATH . $path .'.php';
        if(file_exists($view)){
            /**
             *  extract : compact data from controller to view
             *  return view(PATH)
             */
            extract($this->data);
            require_once $view;
        }
    }
}