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
        Flight::set('flight.lib.path', LIBRARY_PATH);
    }
}
