<?php

/**
 * Index controller
 *
 * @package controllers
 */
class Index extends BaseController {

    /**
     * Constructor to avoid PHP using a method with the same name as the class
     * as the constructor and throw an error message about constructor
     * cannot be static
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Index function
     *
     * @return void
     */
    public static function index()
    {
        self::view()->set('layoutTitle', 'Skeleton Flight');
        self::view()->set('page_title', 'Skeleton Flight');
        $description = "Skeleton Flight is a fantastic micro framework in PHP. <br/>
            This version is bootstrapped and includes Redbean ORM";
        self::view()->set('description', $description);

        self::render('layouts/home');
    }
    
    public static function flatUi()//the view file cannot have dashes
    {
        self::view()->set('layoutTitle', 'Flat UI');
        self::view()->set('page_title', 'Flat UI');
        
        self::render('layouts/flat');
    }
    
    public static function flatUiTest()//the view file cannot have dashes
    {
        self::view()->set('layoutTitle', 'Flat UI');
        self::view()->set('page_title', 'Flat UI');
        
        self::render('layouts/flat');
    }

}