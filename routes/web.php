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


Route::get('/page', function(){
   echo '<pre>';
   print_r($_ENV);
   echo '</pre>';
});


Route::get('/comments', function (){
    $route = Route::current();
    echo  $route->getName();
})->name('comments');


Route::group(['prefix' => 'admin'], function(){

    Route::get('page/create', function(){
//        echo "page/create";
        return redirect()->route('home', array('id'=>25));
    });

    Route::get('page/delete', function(){
        echo 'page/delete';
    });

});

Route::get('/articles', 'Admin/Core@getArticles');
Route::get('/article/{id}', 'Admin/Core@getArticle');

Route::get('/test', function(){
	echo 'lalala';
});
