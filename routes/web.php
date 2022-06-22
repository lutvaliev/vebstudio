<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'indexController@index')->name('index');

Route::get('/about', 'AboutController@about')->name('about');

Route::get('/contact', 'ContactController@contact')->name('contact');

Route::get('/portfolio', 'PortfolioController@portfolio')->name('portfolio');

Route::get('/faq', 'FaqController@faq')->name('faq');

