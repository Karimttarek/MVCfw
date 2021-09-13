<?php

namespace PHPMVC\App\Lib;


trait Helper
{
    public function redirect($path)
    {
        session_write_close();
        header('Location: ' . $path);
        exit;
    }
}