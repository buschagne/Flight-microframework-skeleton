<?php

/**
 * Define an autoloader for php
 *
 * @package lib
 */
class Autoloader{
    
    /**
     * Autoload classes
     * 
     * @param string $class
     */
    public static function load($class){
        $paths = array(
            ROOT_PATH . DS . 'controllers',
            LIBRARY_PATH . DS . 'common',
        );
        
        foreach($paths as $p){
            $filename = strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $class));
            
            $filePath = $p . DS . $filename . '.php';
            if(file_exists($filePath)){
                require_once($filePath);
                break;
            }
        }
    }
}