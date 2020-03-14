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
Route::feeds();

Route::get('/',['uses'=>'SiteController@index','as'=>'home']);
Route::get('/about',['uses'=>'SiteController@about','as'=>'about']);
Route::get('/services',['uses'=>'SiteController@services','as'=>'services']);
Route::get('/portfolio',['uses'=>'SiteController@portfolio','as'=>'portfolio']);
Route::get('/blog',['uses'=>'SiteController@blog','as'=>'blog']);
Route::get('/blog/{slug}',['uses'=>'SiteController@blogSingle','as'=>'blogSingle']);
Route::get('/contact',['uses'=>'SiteController@contact','as'=>'contact']);
Route::post('/contact',['uses'=>'SiteController@contactPost','as'=>'contact']);




Route::group(['prefix' => 'theadmin'], function () {

    Voyager::routes();


    Route::get('link', function () {

        \Artisan::call('storage:link');

    });

    Route::get('cache', function () {

        \Artisan::call('config:cache');

    });


    //  Route::get('/sitemap', ['uses' => 'Site\SiteMapController@index', 'as' => 'sitemap']);

    /**generate the  sitemap*/

    Route::get('sitemap', function () {

        \Artisan::call('sitemap:generate');

    });
});


