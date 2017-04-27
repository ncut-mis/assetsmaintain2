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


 /*
 Route :: get('/',function(){
    return view(' welcome ');
  });
 */
Route :: get(' / ',[ ' as '  =>  ' home.index ',' uses '  =>  ' HomeController @ index ' ]); //首頁
Auth :: routes();
 //用戶路徑
Route :: get(' / users '           ,[ ' as '  =>  ' User.index ',' uses '  =>  ' UsersController @ index ' ]); //列出所有使用者
Route :: get(' / users / create '    ,[ ' as '  =>  ' User.create ',' uses '  =>  ' UsersController @ create ' ]); //抓出新增使用者表單1-1（新增）
Route :: post(' / users '          ,[ ' as ' =>  'User.store','uses'  =>  'UsersController @ store' ]);  //儲存使用者1-2
Route :: edit(' / users/{id}'          ,[ ' as ' =>  'User.store','uses'  =>  'UsersController @ store' ]); //抓出表單2-1（修改)
Route :: patch('/users/{id} '    ,[ ' as '  =>  ' User.update ',' uses '  =>  ' UsersController @ update ' ]); //更新使用者資料2-2
Route :: delete('/users/{id}'  ,[ ' as '  =>  ' User.destroy ',' uses '  =>  ' UsersController @ destroy ' ]); //刪除使用者
Route :: get('/users/query'  ,[ ' as '  =>  ' User.query  ',' uses '  =>  ' UsersController @ query ' ]); //查詢使用者
//耗材路徑
Route :: get(' /supplies '           ,[ ' as '  =>  ' Supply.index ',' uses '  =>  ' SuppliesController @ index ' ]); //列出所有使用者
Route :: get(' / supplies / create '    ,[ ' as '  =>  ' Supply.create ',' uses '  =>  'SuppliesController @ create ' ]); //抓出新增使用者表單1-1（新增）
Route :: post(' /supplies '          ,[ ' as ' =>  'Supply.store','uses'  =>  'SuppliesController @ store' ]);  //儲存使用者1-2
Route :: edit(' / supplies/{id} '          ,[ ' as ' =>  'Supply.edit','uses'  =>  'SuppliesController @ edit' ]); //抓出表單2-1（修改）
Route :: patch('/supplies/{id} '    ,[ ' as '  =>  'Supply.update ',' uses '  =>  ' SuppliesController @ update ' ]); //更新資料2-2
Route :: delete('/supplies/{id}'  ,[ ' as '  =>  ' Supply.destroy ',' uses '  =>  ' SuppliesController @ destroy ' ]); //刪除
Route :: get('/supplies/query'  ,[ ' as '  =>  ' Supply.query  ',' uses '  =>  ' SuppliesController @ query ' ]); //查詢使用者





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
