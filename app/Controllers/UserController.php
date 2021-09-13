<?php

namespace PHPMVC\App\Controllers;

use PHPMVC\App\Models\UserModel;
use PHPMVC\Lib\Database\PDODatabaseHandler;

class UserController extends Controller
{

    public function index()
    {
        /**
         * Compact data [] to view
         */
        $this->data['users'] =  UserModel::getAll();
        $this->view('user/create');
    }
    
}