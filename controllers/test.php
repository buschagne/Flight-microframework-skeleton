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
        R::setup('mysql:host=localhost;
        dbname=redbeanphptest', 'root', 'user');

        //Ready. Now insert a bean!
        $bean = R::dispense('leaflet');
        $bean->title = 'Rant & Rave';
        $bean->description = 'Rant & Rave is a new entry on the ...';

        //Store the bean
        $id = R::store($bean);

        //Reload the bean
        $leaflet = R::load('leaflet', $id);

        //Display the title
        //echo $leaflet->title;
        //$leaflet->title;

        self::view()->set('layoutTitle', 'SF - Test');
        self::view()->set('page_title', 'Test');
        self::view()->set('num', rand(0, 10));
        self::view()->set('bean', $leaflet->title);

        self::render();
    }

}