<?php
require '../lib/flight/Flight.php';
require '../lib/common/constants.php';
require '../lib/common/autoloader.php';
require '../lib/RedBeanPHP3_5_1/rb.php';

spl_autoload_register('Autoloader::load');

Bootstrap::init();

Flight::route('/', array('Index', 'index'));
Flight::route('/test', array('Test', 'index'));
Flight::start();