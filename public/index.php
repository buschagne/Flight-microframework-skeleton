<?php
require '../lib/flight/Flight.php';
require '../lib/common/constants.php';
require '../lib/common/autoloader.php';

spl_autoload_register('Autoloader::load');

Bootstrap::init();

Flight::route('/', array('Index', 'index'));
Flight::start();