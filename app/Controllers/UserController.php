<?php

namespace PHPMVC\Controllers;

class UserController extends Controller
{

    public function index()
    {
        echo 'Controller';
    }

    public function defaultAction()
    {
        $this->view();
    }
}