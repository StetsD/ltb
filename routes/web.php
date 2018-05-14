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

Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);

Route::get('/about/{id}', 'FirstController@show');

Route::get('/articles', ['uses' => 'Admin\Core@getArticles', 'as' => 'articles']);

Route::get('/article/{id}', ['uses' => 'Admin\Core@getArticle', 'as' => 'article']);

// Route::get('pages/add', 'Admin\CoreResource@add');
// Route::resource('/pages', 'Admin\CoreResource');

Route::controller('/pages', 'PagesController', ['getIndex'=>'pages.get']);
