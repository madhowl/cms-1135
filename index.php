<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once('./config/db.php');
require('vendor/autoload.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'App\Controllers\FrontController@index');
Macaw::get('page', 'App\Controllers\FrontController@allArticles');
Macaw::get('view/(:any)', 'App\Controllers\FrontController@singleArticle');

Macaw::get('category/(:num)', 'App\Controllers\FrontController@articleInCategory');


// ------------- ADMIN -----------

Macaw::get('/admin/', 'App\Controllers\DashboardController@index');
Macaw::get('/admin/tags', 'App\Controllers\DashboardController@showAllTags');
Macaw::post('/admin/newtag/', 'App\Controllers\DashboardController@createNewTag');

Macaw::dispatch();