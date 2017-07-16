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
Route::get('/post/{slug}', [
    'uses' => 'FrontendController@singlePost',
    'as'    => 'post.single'
]);
Route::get('/category/{id}', [
    'uses' => 'FrontendController@category',
    'as'    => 'category.single'
]);
Route::get('/tag/{id}', [
    'uses' => 'FrontendController@tag',
    'as'    => 'tag.single'
]);
Route::get('/results', function(){
    $posts       = \App\Post::where('title', 'like', '%' .  request('query') . '%')->get();
    return view('results')->with('posts', $posts)
                ->with('title', 'Search result: ' . request('query'))
                ->with('settings', \App\Setting::first())
                ->with('categories', \App\Category::take(5)->get())
                ->with('query', request('query'));
    // $post       = \App\Post::where('title', 'like', '%' .  request('query') . '%')->get();
    // $title      = 'Search result: ' . request('query');
    // $settings   = \App\Setting::first();
    // $categories = \App\Category::take(5)->get();
    // $query      = request('query');
    // return view('results', compact('post', 'title', 'settings', 'categories', 'query'));
});


// BACKEND
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::get('home',[
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


});



