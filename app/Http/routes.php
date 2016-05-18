<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//===============================================================================//
//++++++++++++++++++++++++ F R O N T E N D ++++++++++++++++++++++++++++++++++++++//
//         This is section route to controll user access website                 //
//===============================================================================//
Route::get('/',  'MainController@index');
Route::get('{slug}.{id}', [
    'as' => 'article.detail',
    'uses' => 'ArticlesController@detail'
    ]);
Route::get('list-articles', [
        'as' => 'articles.index',
        'uses' => 'ArticlesController@index'
    ]);
Route::get('/member/{member}', function($member){
	return 'Member is '.$member;
});
Route::get('/category/{slug}.{id}', function($slug, $id){
	return  'Category is '.$slug.' have id '.$id;
});
// Route::get('list-categories', [
//     'as' => 'category.index',
//     'uses' => 'CategoriesControlle@index'
//     ]);
// Route::get('/category/{slug}-{id}', [
//     'as' => 'category.detail',
//     'uses' => 'ArticlesController@detail'
//     ]);
// Route::get('list-members', [
//     'as' => 'member.index',
//     'uses' => 'MembersController@index'
//     ]);
// Route::get('{member}', [
//     'as' => 'member.detail',
//     'uses' => 'MembersController@detail'
//     ]);

// App::down('ArticlesController@list_in_cate');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

//========================================================================//
//+++++++++++++++++++ A D M I N I S T R A T O R S ++++++++++++++++++++++++//
//              This is section route manage data from andmin             //
//========================================================================//

Route::get('/admin', 'AdminController@index');
Route::get('/login', 'AdminController@login');