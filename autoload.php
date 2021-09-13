<?php

namespace PHPMVC;

use Exception;

class Autoload
{
    public static function autoload($class){
        // $class = strtolower(str_replace('PHPMVC' , '' ,$class)) . '.php';
        $class = str_replace('PHPMVC' , '' ,$class);
        // $class = str_replace('\\' , '/' , $class);
        $class = $class . '.php';
        $class = strtolower($class);
        if(file_exists(APP_PATH . $class)){
            // return File
            require_once APP_PATH . $class;
        }else{
            // Throw Exception
            // throw new Exception('No such file or directory ' . $class);
        }
        
    }
}
spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');