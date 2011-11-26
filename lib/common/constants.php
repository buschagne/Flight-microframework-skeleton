<?php
/**
 * Shortcut for directory deparator constant
 */
if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}

/**
 * Define ROOT_PATH constant to simplify include/require operations
 */
if(!defined('ROOT_PATH')){
    define('ROOT_PATH', realpath(__DIR__) . DS . '..');
}

/**
 * Define VIEWS_PATH constant so simplify the access to view files
 */
if(!defined('VIEWS_PATH')){
    define('VIEWS_PATH', ROOT_PATH . DS . 'views');
}

/**
 * Define LIBRARY_PATH constant
 */
if(!defined('LIBRARY_PATH')){
    define('LIBRARY_PATH', ROOT_PATH . DS . 'lib');
}