<?php

namespace PHPMVC;

use PHPMVC\Lib\FrontController;

// if(!defined('DS')) {
//     define('DS', DIRECTORY_SEPARATOR);
// }
// require_once '..' .DIRECTORY_SEPARATOR .  'config.php';
// require_once '..' .DIRECTORY_SEPARATOR .  'autoload.php';

// require_once '..' .DIRECTORY_SEPARATOR . 'app'. DIRECTORY_SEPARATOR . 'Lib' . DIRECTORY_SEPARATOR . 'config.php';
// require_once '..' .DIRECTORY_SEPARATOR . 'app'. DIRECTORY_SEPARATOR . 'Lib' . DIRECTORY_SEPARATOR . 'autoload.php';

require_once '..' . DIRECTORY_SEPARATOR . 'config.php';
require_once '..' . DIRECTORY_SEPARATOR . 'autoload.php';

$frontController = new FrontController();
$frontController->dispatch();