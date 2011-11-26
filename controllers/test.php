<?php

/**
 * Test class
 *
 * @package default
 */
class Test extends BaseController
{
    /**
     * Test function
     *
     * @return void
     */
    public static function index(){
        self::view()->set('num', rand(0, 10));
        self::view()->set('layoutTitle', 'Hello World!');
        
        self::render();
    }
}