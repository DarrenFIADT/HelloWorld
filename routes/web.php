<?php
# @Date:   2019-09-24T14:07:14+01:00
# @Last modified time: 2019-09-24T15:12:04+01:00




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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "<p>Test</p>";
});

Route::get('/hello', 'HelloController@hello' );
