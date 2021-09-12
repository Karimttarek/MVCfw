<?php

namespace PHPMVC\Lib;
/**
 * App Constants
 */
define('DS' , DIRECTORY_SEPARATOR);

define('APP_PATH', dirname(realpath(__FILE__)));
define('VIEW_PATH' , APP_PATH . DS . 'resources' . DS. 'views');

define('TEMPLATE_PATH', APP_PATH . DS . 'template' . DS);
define('LANGUAGES_PATH', APP_PATH . DS . 'languages' . DS);



// Database Credentials
defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', 'rebo');
defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'storedb');
defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 'PDO');

// Default application language
defined('APP_DEFAULT_LANGUAGE')     ? null : define ('APP_DEFAULT_LANGUAGE', 'ar');

// Check for access privileges
defined('CHECK_FOR_PRIVILEGES') ? null : define('CHECK_FOR_PRIVILEGES', 1);