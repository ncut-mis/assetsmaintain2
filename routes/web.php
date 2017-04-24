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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/' , ['as' => 'home.index' , 'uses' => 'HomeController@index']);//首頁
Auth::routes();

//維修申請
Route::get('assets/{asset}/MaintainceApplications/create', ['as' => 'MaintainceApplicat.create' , 'uses' => 'AssetMaintainceApplicationsController@create']);
Route::get('assets/{asset}/MaintainceApplications/store', ['as' => 'MaintainceApplicat.store' , 'uses' => 'AssetMaintainceApplicationsController@store']);

//User路徑
Route::get('/users'          , ['as' => 'User.index' , 'uses' => 'UsersController@index']);//列出所有使用者
Route::get('/users/create'   , ['as' => 'User.create', 'uses' => 'UsersController@create']);//抓出新增使用者表單1-1(新增)
Route::post('/users'         , ['as' => 'User.store' , 'uses' => 'UsersController@store']);//儲存使用者1-2
Route::get('/users/{id}/edit', ['as' => 'User.edit'  , 'uses' => 'UsersController@edit']);//叫出原本的資料2-1(修改)
Route::patch('/users/{id}'   , ['as' => 'User.update', 'uses' => 'UsersController@update']);//更新資料2-2
Route::delete('/users/{id}'  , ['as' => 'User.destroy','uses' => 'UsersController@destroy']);//刪除
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
