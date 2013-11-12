<?php

/**
 * Test class
 *
 * @package default
 */
class Test extends BaseController {

    /**
     * Test function
     *
     * @return void
     */
    public static function index()
    {
        //$data = self::data();
        self::view()->set('layoutTitle', 'SF - Test');
        self::view()->set('page_title', 'Test');
        self::view()->set('num', rand(0, 10));
        //self::view()->set('bean', $data);
        self::view()->set('bean', self::data());

        self::render();
    }
    
    function data(){
        
        R::setup('mysql:host=localhost;
        dbname=redbeanphptest', 'root', 'user');

        //Ready. Now insert a bean!
        $bean = R::dispense('leaflet');
        $bean->title = '3rd Rant & Rave';
        $bean->description = '3rd Rant & Rave is a new entry on the ...';

        //Store the bean
        $id = R::store($bean);

        //Reload the bean
        $leaflet = R::load('leaflet', $id);

        //Display the title
        //echo $leaflet->title;
        //$leaflet->title;
        
        return $leaflet->title;
    }

}