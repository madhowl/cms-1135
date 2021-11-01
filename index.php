<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once('./config/db.php');
require('vendor/autoload.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'App\Controllers\FrontController@index');
Macaw::get('page', 'App\Controllers\FrontController@page');
Macaw::get('view/(:any)', 'App\Controllers\FrontController@view');


// ------------- ADMIN -----------

Macaw::get('/admin', 'App\Controllers\DashboardController@index');

Macaw::dispatch();