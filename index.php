<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once('./config/db.php');
require('vendor/autoload.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'App\Controller@index');
Macaw::get('page', 'App\Controller@page');
Macaw::get('view/(:num)', 'App\Controller@view');

Macaw::dispatch();