<?php

use \think\Route;


Route::get('/','page/index/index');
Route::get('index','page/index/index');


Route::get('/aboutus/:id','page/aboutus/index');
Route::get('/aboutus/','page/aboutus/index');

Route::get('/product/:id','page/product/index');
Route::get('/product/','page/product/index');

Route::get('/product/detail/:id','/page/product/detail');


Route::get('/news/:cid','page/news/index');
Route::get('/news/detail/:id','/page/news/detail');
Route::get('/news/','page/news/index');

Route::get('/services/','page/services/index');

Route::get('/purchase/','page/purchase/index');

Route::get('/knolodeg/','page/knolodeg/index');

Route::get('/message/','page/message/index');

Route::get('/contact/','page/contact/index');