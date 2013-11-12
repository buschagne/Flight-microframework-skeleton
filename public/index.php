<?php

/* ====================
 * libs
 * ==================== */
require '../lib/flight/Flight.php';
require '../lib/common/constants.php';
require '../lib/common/autoloader.php';
require '../lib/RedBeanPHP3_5_1/rb.php';

/* ====================
 * autoloader
 * ==================== */
spl_autoload_register('Autoloader::load');

/* ====================
 * bootstrap
 * ==================== */
Bootstrap::init();

/* ====================
 * set global base URL
 * ==================== */
Flight::set('flight.base_url', '/microframeworks/skeleton-flight/public');

/* ====================
 * routes
 * ==================== */
Flight::route('/', array('Index', 'index'));
Flight::route('/flat-ui', array('Index', 'flatUi'));
Flight::route('/flat-ui/test', array('Index', 'flatUiTest'));
Flight::route('/test', array('Test', 'index'));

/* ====================
 * go for it!
 * ==================== */
Flight::start();