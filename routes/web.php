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
    return view('welcome');
});

Auth::routes();
Route::get('login','AuthController@getLogin');
Route::get('logout','AuthController@getLogout');



/*
Route::group('middleware'=>'auth'),function(){
    Route::get('edit','');//編輯
});


Route::get('/'                   , ['as' => 'home.index' , 'uses' => 'HomeController@index']);//首頁
Route::get('posts'               , ['as' => 'posts.index', 'uses' => 'PostsController@index']);
Route::get('posts/{pid}'          , ['as' => 'posts.show' , 'uses' => 'PostsController@show']);
Route::post('posts/{pid}/comments', ['as' => 'posts.comments.store' , 'uses' => 'CommentsController@store']);
Route::delete('posts/{pid}/comments/{cid}', ['as' => 'posts.comments.destroy','uses' => 'CommentsController@destroy']);
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);
    Route::get('posts'          , ['as' => 'admin.posts.index' , 'uses' => 'AdminPostsController@index']);
    Route::get('posts/create'   , ['as' => 'admin.posts.create', 'uses' => 'AdminPostsController@create']);
    Route::post('posts'         , ['as' => 'admin.posts.store' , 'uses' => 'AdminPostsController@store']);
    Route::get('posts/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'AdminPostsController@edit']);
    Route::patch('posts/{id}'   , ['as' => 'admin.posts.update', 'uses' => 'AdminPostsController@update']);
    Route::delete('posts/{id}'  , ['as' => 'admin.posts.destroy','uses' => 'AdminPostsController@destroy']);
*/
