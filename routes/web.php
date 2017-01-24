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

Route::get('/', function () {
    //return view('welcome');
   return view('index');
    //return view('mainLayout');
});

/*
Route::get('blog', function () {
    
    return view('blogPage');
    
});

*/
//Blog Post controller
Route::get('blog','controller_Posts@index');

// Single Blog by id 
Route::get('blog/{id}','controller_Posts@single_post');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});

