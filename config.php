<?php

namespace PHPMVC;
/**
 * App Constants
 */
define('DS' , DIRECTORY_SEPARATOR);

define('APP_PATH', dirname(realpath(__FILE__)));
define('RESOURCE_VIEW_PATH', dirname(realpath(__FILE__)) . DS . 'resources' . DS .'views'. DS);
define('VIEW_PATH' , APP_PATH . DS. 'views' . DS);


define('TEMPLATE_PATH', APP_PATH . DS . 'template' . DS);
define('LANGUAGES_PATH', APP_PATH . DS . 'languages' . DS);


// Database Credentials
defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', '');
defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'online-store');
defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 'PDO');

// Default application language
defined('APP_DEFAULT_LANGUAGE')     ? null : define ('APP_DEFAULT_LANGUAGE', 'en');

// SALT
defined('APP_SALT')     ? null : define ('APP_SALT', '$2a$07$yeNCSNwRpYopOhv0TrrReP$');

// Check for access privileges
defined('CHECK_FOR_PRIVILEGES') ? null : define('CHECK_FOR_PRIVILEGES', 1);