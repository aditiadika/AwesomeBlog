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
    // FRONTEND 
Route::get('/', [
    'uses' => 'FrontendController@index',
    'as'    => 'index'
]);

Route::get('/recommendation', [
    'uses' => 'FrontendController@masterContent',
    'as'    => 'master.content'
]);

Route::get('/recommendation/{slug}', [
    'uses' => 'FrontendController@singlePost',
    'as'    => 'post.single'
]);
Route::get('/category/{id}', [
    'uses' => 'FrontendController@category',
    'as'    => 'category.single'
]);
//Trading Guides
Route::get('/trading-guides', [
    'uses' => 'FrontendController@tradingGuides',
    'as'    => 'trading.guides'
]);
Route::get('/trading-guides/{slug}', [
    'uses' => 'FrontendController@detailTradingGuides',
    'as'    => 'detail.trading-guides'
]);
//Programs
Route::get('/programs', [
    'uses' => 'FrontendController@programs',
    'as'    => 'programs'
]);
Route::get('/programs/{slug}', [
    'uses' => 'FrontendController@detailPrograms',
    'as'    => 'detail.programs'
]);

Route::get('/ranking-volume', [
    'uses' => 'ImportExcelController@frontendIndexBreakout',
    'as'    => 'frontend.breakout'
]);
Route::post('/ranking-volume', [
    'uses' => 'ImportExcelController@frontendPostBreakout',
    'as'    => 'frontend.breakout-post'
]);

Route::get('/bandarmology', [
    'uses' => 'ImportExcelController@frontendIndexTrendReversal',
    'as'    => 'frontend.trend-reversal'
]);
Route::post('/bandarmology', [
    'uses' => 'ImportExcelController@frontendPostTrendReversal',
    'as'    => 'frontend.trend-reversal-post'
]);

Route::get('/breakout', [
    'uses' => 'ImportExcelController@frontendIndexBoom',
    'as'    => 'frontend.boom'
]);
Route::post('/breakout', [
    'uses' => 'ImportExcelController@frontendPostBoom',
    'as'    => 'frontend.boom-post'
]);

Route::get('/foreign', [
    'uses' => 'ImportExcelController@frontendIndexForeignAccumulation',
    'as'    => 'frontend.foreign-accumulation'
]);
Route::post('/foreign-accumulation-data', [
    'uses' => 'ImportExcelController@frontendPostForeignAccumulation',
    'as'    => 'frontend.foreign-accumulation-post'
]);

Route::post('subscribe', [
    'uses'  => 'SubscriberController@data',
    'as'    => 'subscriber'
]);

//Articles
Route::get('/article', [
    'uses' => 'FrontendController@getArticle',
    'as'    => 'article'
]);
Route::get('/article/{slug}', [
    'uses' => 'FrontendController@detailArticle',
    'as'    => 'detail.article'
]);

// BACKEND
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::get('/home',[
		'uses'	=> 'HomeController@index',
		'as'	=> 'home'
	]);
//	    Create Post
	Route::get('/post/create',[
		'uses' => 'PostController@create',
		'as' => 'post.create'
	]);
    //	    Sending Post
	Route::post('/post/store',[
		'uses' => 'PostController@store',
		'as' => 'post.store'
	]);
    //	    Soft Delete Post
    Route::get('/post/delete/{id}',[
        'uses' => 'PostController@destroy',
        'as' => 'post.delete'
    ]);
    //	    Permanent delete Post
    Route::get('/post/kill/{id}',[
        'uses' => 'PostController@kill',
        'as' => 'post.kill'
    ]);
//	    Move Post to trashed
    Route::get('/posts/trashed',[
        'uses' => 'PostController@trashed',
        'as' => 'posts.trashed'
    ]);
//	    Restore Post
    Route::get('/posts/restore/{id}',[
        'uses' => 'PostController@restore',
        'as' => 'posts.restore'
    ]);
    //	    Edit Post
    Route::get('/posts/edit/{id}',[
        'uses' => 'PostController@edit',
        'as' => 'post.edit'
    ]);
    //	    Edit Post
    Route::post('/post/update/{id}',[
        'uses' => 'PostController@update',
        'as' => 'post.update'
    ]);
//	    return view post
    Route::get('/posts',[
        'uses' => 'PostController@index',
        'as' => 'posts'
    ]);

//            CATEGORY ROUTE
	Route::get('/category/create',[
		'uses' => 'CategoriesController@create',
		'as'	=> 'category.create'
	]);
	Route::get('/categories',[
		'uses' => 'CategoriesController@index',
		'as'	=> 'category'
	]);
	Route::post('/category/store',[
		'uses'	=> 'CategoriesController@store',
		'as'	=> 'categories.store'
	]);
	Route::get('/categories.edit/{id}',[
		'uses' => 'CategoriesController@edit',
		'as'	=> 'category.edit'
	]);
	Route::get('/categories.delete/{id}',[
		'uses' => 'CategoriesController@destroy',
		'as'	=> 'category.delete'
	]);
	Route::post('/categories.update/{id}',[
		'uses' => 'CategoriesController@update',
		'as' => 'category.update'
	]);
//            TAGS ROUTE
    Route::get('/tags',[
       'uses' => 'TagsController@index',

        'as' => 'tags'
    ]);
    Route::get('/tags/edit/{id}',[

        'uses' => 'TagsController@edit',
        'as' => 'tags.edit'
    ]);
    Route::get('/tags/create/',[

        'uses' => 'TagsController@create',
        'as' => 'tags.create'
    ]);
    Route::post('/tags/store/',[

        'uses' => 'TagsController@store',
        'as' => 'tags.store'
    ]);
    Route::post('/tags/update/{id}',[

        'uses' => 'TagsController@update',
        'as' => 'tags.update'
    ]);
    Route::get('/tags/delete/{id}',[

        'uses' => 'TagsController@destroy',
        'as' => 'tags.delete'
    ]);
//            USERS ROUTE
    Route::get('/users', [

        'uses'  => 'UsersController@index',
        'as'    => 'users'
    ]);
    Route::get('/users/create', [

        'uses'  => 'UsersController@create',
        'as'    => 'users.create'
    ]);
    Route::get('/users/activated/{id}', [

        'uses'  => 'UsersController@edit',
        'as'    => 'users.activated'
    ]);
    Route::get('/users/banned/{id}', [

        'uses'  => 'UsersController@banned',
        'as'    => 'users.banned'
    ]);
    Route::post('/users/store', [

        'uses'  => 'UsersController@store',
        'as'    => 'users.store'
    ]);
    Route::get('/users/admin/{id}', [

        'uses'  => 'UsersController@admin',
        'as'    => 'users.admin'
    ]);
    Route::get('/users/not-admin/{id}', [

        'uses'  => 'UsersController@not_admin',
        'as'    => 'users.not.admin'
    ]);
    Route::get('/users/profile', [

        'uses'  => 'ProfilesController@index',
        'as'    => 'users.profile'
    ]);
    Route::post('/users/profile/update', [

        'uses'  => 'ProfilesController@update',
        'as'    => 'users.profile.update'
    ]);
    Route::get('/users/profile/{id}', [

        'uses'  => 'UsersController@destroy',
        'as'    => 'users.delete'
    ]);
//            SETTINGS ROUTE
    Route::get('/settings', [

        'uses'  => 'SettingsController@index',
        'as'    => 'setting'
    ]);
    Route::post('/settings/update', [
        'uses'  => 'SettingsController@update',
        'as'    => 'setting.update'
    ]);

    Route::get('upload/rangking-volume', [
        'uses'  => 'ImportExcelController@indexRangkingVolume',
        'as'    => 'index.rangking-volume'
    ]);
    Route::post('upload/rangking-volume-data', [
        'uses'  => 'ImportExcelController@uploadRangkingVolume',
        'as'    => 'upload.rangking-volume'
    ]);
    Route::post('delete/rangking-volume-data', [
        'uses'  => 'ImportExcelController@deleteRangkingVolume',
        'as'    => 'delete.rangking-volume'
    ]);

    Route::get('upload/trend-reversal', [
        'uses'  => 'ImportExcelController@indexTrendReversal',
        'as'    => 'index.trend-reversal'
    ]);
    Route::post('upload/trend-reversal', [
        'uses'  => 'ImportExcelController@uploadTrendReversal',
        'as'    => 'upload.trend-reversal'
    ]);
    Route::post('delete/trend-reversal', [
        'uses'  => 'ImportExcelController@deleteTrendReversal',
        'as'    => 'delete.trend-reversal'
    ]);

    Route::get('upload/foreign-accumulation', [
        'uses'  => 'ImportExcelController@indexForeignAccumulation',
        'as'    => 'index.foreign-accumulation'
    ]);
    Route::post('upload/foreign-accumulation', [
        'uses'  => 'ImportExcelController@uploadForeignAccumulation',
        'as'    => 'upload.foreign-accumulation'
    ]);
    Route::post('delete/foreign-accumulation', [
        'uses'  => 'ImportExcelController@deleteForeignAccumulation',
        'as'    => 'delete.foreign-accumulation'
    ]);

    Route::get('upload/boom', [
        'uses'  => 'ImportExcelController@indexBoom',
        'as'    => 'index.boom'
    ]);
    Route::post('upload/boom', [
        'uses'  => 'ImportExcelController@uploadBoom',
        'as'    => 'upload.boom'
    ]);
    Route::post('delete/boom', [
        'uses'  => 'ImportExcelController@deleteBoom',
        'as'    => 'delete.boom'
    ]);

    Route::get('get/subscriber', [
        'uses'  => 'SubscriberController@subscribeBackend',
        'as'    => 'get.subscribe'
    ]);
});



