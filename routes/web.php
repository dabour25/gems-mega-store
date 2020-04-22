<?php

use Illuminate\Support\Facades\Route;

/*
| Gems Project Created By Eng.Ahmed Magdy - Eng.Radwa Essam
| For Technical Support contact with this URL: http://amagdy.66ghz.com/
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UserControllers\MainController@index');
