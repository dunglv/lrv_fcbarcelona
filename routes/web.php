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

//===============================================================================//
//++++++++++++++++++++++++ F R O N T E N D ++++++++++++++++++++++++++++++++++++++//
//         This is section route to controll user access website                 //
//===============================================================================//



    Route::get('/logout', [
        'as' => 'user.logout',
        'uses' => 'MainController@logout'
        ]);
    Route::get('/',  [
        'as' => 'front.home',
        'uses' => 'MainController@index'
        ]);
    Route::get('/register', [
        'as' => 'front.user.get_register',
        'uses' => 'MainController@getRegister'
        ]);
    Route::post('/register', [
        'as' => 'front.user.post_register',
        'uses' => 'MainController@postRegister'
        ]);
    
    Route::get('/login', [
        'as' => 'front.user.get_login',
        'uses' => 'MainController@getLogin'
        ]);
    Route::post('/login', [
        'as' => 'front.user.post_login',
        'uses' => 'MainController@postLogin'
        ]);
    Route::get('{slug}.{id}', [
        'as' => 'article.detail',
        'uses' => 'ArticlesController@detail'
        ]);
    Route::get('/list-articles', [
            'as' => 'article.index',
            'uses' => 'ArticlesController@index'
        ]);
    Route::get('/error_404', function(){
    	$articles = Article::orderBy(DB::raw('RAND()'))->take(2)->get();
    	return view('errors.404', compact('articles'));
    });
    Route::get('/member/{member}', function($member){
    	return 'Member is '.$member;
    });
    Route::get('/category/{slug}.{id}', function($slug, $id){
    	return  'Category is '.$slug.' have id '.$id;
    });
    Route::post('{slug}.{id}', [
        'as' => 'comment.store',
        'uses' => 'CommentsController@store'
        ]);
    Route::get('/team', [
        'as' => 'team.index',
        'uses' => 'TeamController@index'
        ]);
    Route::get('/shop', [
        'as' => 'shop.index',
        'uses' => 'ShopController@index'
        ]);
   
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

// Route::group(['middleware' => ['web']], function () {
//     //
// });

//========================================================================//
//+++++++++++++++++++ A D M I N I S T R A T O R S ++++++++++++++++++++++++//
//              This is section route manage data from andmin             //
//========================================================================//


Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [
        'as' => 'admin.home',
        'uses' => 'AdminController@index'
        ]);

    Route::get('/login', 'AdminController@login');
    Route::post('/login', 'AdminController@login');

    Route::resource('/article', 'ArticleController', ['as' => 'admin' ]);
    // Route::get('/articles', 'ArticlesController@manage');
    // Route::get('/article/create', [
    //         'as' => 'admin.article.create', 
    //         'uses' => 'ArticlesController@create'
    //     ]);
    // // Route::resource('/article');
    // Route::post('/article/create', [
    //     'as' => 'admin.article.store',
    //     'uses' => 'ArticlesController@store'
    //     ]);
});


