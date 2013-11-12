<?php
/**
* Bootstrap the application
*/
class Bootstrap
{
    /**
     * Initialize some configurations
     *
     * @return void
     */
    public static function init(){
        Flight::set('flight.views.path', VIEWS_PATH);
        define('BASE_URL', '/microframeworks/skeleton-flight/public');
    }
    
    
}
