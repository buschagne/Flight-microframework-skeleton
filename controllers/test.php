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
        
        /* ====================
         * redbean data
         * ==================== */
        self::view()->set('bean', self::data());
        
        /* ====================
         * Mongo data
         * ==================== */
        //self::view()->set('mongobean', self::mongodata());

        self::render();
    }

    function data()
    {

        R::setup('mysql:host=localhost;
        dbname=redbeanphptest', 'root', 'user');

        //Ready. Now insert a bean!
        $bean = R::dispense('leaflet');
        $bean->title = '3rd Rant & Rave';
        $bean->description = '3rd Rant & Rave is a new entry on the ...';
        $bean->description2 = '3rd Rant & Rave is a new entry on the ...';
        $bean->bla = true;

        //Store the bean
        $id = R::store($bean);

        //Reload the bean
        $leaflet = R::load('leaflet', $id);

        //Display the title
        //echo $leaflet->title;
        //$leaflet->title;

        return $leaflet->title;
    }

    function mongodata()
    {
        $data = array();

        try {
            $connection = new Mongo('mongodb://user:pass@xxxxx.mongolab.com:xxxxx/dbname');
            $database = $connection->selectDB('dbname');
            $collection = $database->selectCollection('my_collection');
        } catch (MongoConnectionException $e) {
            die("Failed to connect to database " . $e->getMessage());
        }

        foreach ($collection->find(array('twitter' => 'dddddderickr')) as $record) {
            //var_dump($record);            
            $data[]=$record; 
        }
        
        return $data[0]['twitter'];
    }

}