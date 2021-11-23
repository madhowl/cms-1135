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

Macaw::get('/admin', 'App\Controllers\DashboardController@index');
Macaw::get('/admin/', 'App\Controllers\DashboardController@index');
// -------------- Tags -------------
//показать все метки
Macaw::get('/admin/tags', 'App\Controllers\DashboardController@showAllTags');
//форма добавления метки
Macaw::get('/admin/tag/new', 'App\Controllers\DashboardController@createNewTag');
//сохраняем новую метку
Macaw::post('/admin/tags/add', 'App\Controllers\DashboardController@storeNewTag');
//форма редактирования метки
Macaw::get('/admin/tag-edit/(:num)', 'App\Controllers\DashboardController@tagEdit');
//обновляем метку по id
Macaw::post('/admin/tag-edit/(:num)', 'App\Controllers\DashboardController@updateTag');
//удаляем метку по id
Macaw::get('/admin/tag-delete/(:num)', 'App\Controllers\DashboardController@tagDelete');
//просмотр метки по id
Macaw::get('/admin/tag-view/(:num)', 'App\Controllers\DashboardController@tagView');

Macaw::dispatch();
