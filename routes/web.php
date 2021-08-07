<?php

use DinoPHP\Router\Route;

Route::get('/', 'Controller@index');
Route::get('/docs', 'Controller@docs');
Route::get('/installation', 'Controller@installation');
Route::get('/tags', 'Controller@tags');
Route::get('/looping', 'Controller@looping');
Route::get('/statement', 'Controller@statement');
Route::get('/filters', 'Controller@filters');
Route::get('/formats', 'Controller@formats');
Route::get('/functions', 'Controller@functions');
Route::get('/operators', 'Controller@operators');
Route::get('/objects', 'Controller@objects');
Route::get('/templating', 'Controller@templating');