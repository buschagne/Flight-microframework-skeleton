<?php

/**
 * Index controller
 *
 * @package controllers
 */
class Index extends BaseController
{
    /**
     * Constructor to avoid PHP using a method with the same name as the class
     * as the constructor and throw an error message about constructor
     * cannot be static
     * 
     * @return void
     */
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * Index function
     *
     * @return void
     */
    public static function index(){
        self::view()->set('layoutTitle', 'Hello World!');
        
        self::render();
    }
}