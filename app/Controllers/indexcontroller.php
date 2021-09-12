<?php

namespace PHPMVC\Controllers;

class IndexController extends Controller
{

    public function index()
    {
        $this->view();
    }

    public function defaultAction()
    {
        $this->view();
    }

}