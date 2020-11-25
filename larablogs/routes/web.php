<?php


Route::post('/subscribe', function() {
	$email = request('email');

	Newsletter::subscribe($email);

	echo "<script> alert('Berhasil Berlangganan..'); </script>";
	Session::flash('subscribed', 'Successfully Subscribed');
	return redirect()->back();

});

Route::get('/test', function(){

  return App\Profile::find(1)->user;
});

Route::get('exception/index', 'ExceptionController@index');

	Route::get('/', [
	'uses' => 'FrontEndController@index',

	'as' => 'index'
     ]);

	Route::get('/catalog/{slug}', [
	'uses' => 'FrontEndController@singlePost',

	'as' => 'post.single'
     ]);

	Route::get('/category/{id}', [
	'uses' => 'FrontEndController@category',

	'as' => 'category.single'
     ]);

	Route::get('/tag/{id}', [
	'uses' => 'FrontEndController@tag',

	'as' => 'tag.single'
	 ]);

	 Route::get('/services', [
		'uses' => 'FrontEndController@services',
	
		'as' => 'services'
		 ]);

	Route::get('/results', function(){
		$posts = \App\Post::where('title','like', '%' . request('query') . '%')->get();


		return view('results')->with('posts', $posts)
							  ->with('title', 'Search results : ' . request('query'))
                               ->with('settings', \App\Setting::first())
                               ->with('categories', \App\Category::take(4)->get())
                               ->with('query', request('query'));
    });

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/home', [
		'uses' => 'HomeController@index',

		'as' => 'home'
	]);

	Route::get('/post/create', [
	'uses' => 'PostController@create',

	'as' => 'post.create'
	 ]);
	 
	Route::get('/price/create', [
		'uses' => 'PostController@createprice',
	
		'as' => 'price.create'
		 ]);

	Route::get('/price/list', [
	'uses' => 'PostController@listprice',

	'as' => 'price.list'
		]);

	Route::post('/post/store', [
		'uses' => 'PostController@store',

		'as' => 'post.store'
	]);
	Route::post('/price/store', [
		'uses' => 'PostController@storePrice',

		'as' => 'price.store'
	]);

	Route::get('/price/edit/{id}', [
		'uses' => 'postController@editprice',
	
		'as' => 'price.edit'
		]);	

		
	Route::post('/price/update/{id}', [
		'uses' => 'postController@updateprice',
	
		'as' => 'price.update'
		]);

	Route::get('/price/delete/{id}', [
		'uses' => 'postController@destroyprice',

		'as' => 'price.delete'
		]);



	Route::get('/category/create', [
	'uses' => 'CategoryController@create',

	'as' => 'category.create'
     ]);	 


	Route::get('/categories', [
	'uses' => 'CategoryController@index',

	'as' => 'categories'
     ]);


	Route::post('/category/store', [
	'uses' => 'CategoryController@store',

	'as' => 'category.store'
	]);

    Route::get('/category/edit/{id}', [
	'uses' => 'CategoryController@edit',

	'as' => 'category.edit'
	]);	

    Route::get('/category/delete/{id}', [
	'uses' => 'CategoryController@destroy',

	'as' => 'category.delete'
	]);	

    Route::post('/category/update/{id}', [
	'uses' => 'CategoryController@update',

	'as' => 'category.update'
	]);

	Route::get('/posts', [
	'uses' => 'postController@index',

	'as' => 'posts'
     ]);
	
    Route::get('/post/delete/{id}', [
	'uses' => 'PostController@destroy',

	'as' => 'post.delete'
	]);	

	Route::get('/posts/trashed', [
	'uses' => 'postController@trashed',

	'as' => 'posts.trashed'
     ]);

	Route::get('/posts/kill{id}', [
	'uses' => 'postController@kill',

	'as' => 'post.kill'
     ]);

	Route::get('/posts/restore{id}', [
	'uses' => 'postController@restore',

	'as' => 'post.restore'
     ]);

	Route::get('/posts/edit{id}', [
	'uses' => 'postController@edit',

	'as' => 'post.edit'
     ]);

	Route::post('/post/update{id}', [
	'uses' => 'postController@update',

	'as' => 'post.update'
     ]);

	Route::get('/tags', [
	'uses' => 'tagController@index',

	'as' => 'tags'
     ]);

	Route::get('/tag/edit/{id}', [
	'uses' => 'tagController@edit',

	'as' => 'tag.edit'
     ]);

	Route::get('/tag/create/', [
	'uses' => 'tagController@create',

	'as' => 'tag.create'
     ]);


	Route::post('/tag/store/', [
	'uses' => 'tagController@store',

	'as' => 'tag.store'
     ]);


	Route::post('/tag/update{id}', [
	'uses' => 'tagController@update',

	'as' => 'tag.update'
     ]);


 	Route::get('/tag/delete/{id}', [
	'uses' => 'TagController@destroy',

	'as' => 'tag.delete'
	]);	

	Route::get('/users', [
	'uses' => 'UserController@index',

	'as' => 'users'
     ]);

	Route::get('/user/create', [
	'uses' => 'UserController@create',

	'as' => 'user.create'
     ]);

	Route::post('/user/store/', [
	'uses' => 'UserController@store',

	'as' => 'user.store'
     ]);

 	Route::get('/user/admin/{id}', [
	'uses' => 'UserController@admin',

	'as' => 'user.admin'
     ]);

	Route::get('/user/not_admin/{id}', [
	'uses' => 'UserController@not_admin',

	'as' => 'user.not.admin'
     ]);

	Route::get('/user/profile', [
	'uses' => 'ProfileController@index',

	'as' => 'user.profile'
     ]);

	Route::post('/user/profile/update', [
	'uses' => 'ProfileController@update',

	'as' => 'user.profile.update'
     ]);

	Route::get('/user/delete/{id}', [
	'uses' => 'UserController@destroy',

	'as' => 'user.delete'
     ]);

	Route::get('/settings', [
	'uses' => 'SettingController@index',

	'as' => 'settings'
     ]);

	Route::post('/settings/update', [
	'uses' => 'SettingController@update',

	'as' => 'settings.update'
     ]);

	
});

Route::get('/contact', [
	'uses' => 'FrontendController@setting',

	'as' => 'contact'
     ]);
Route::get('/about', [
	'uses' => 'FrontendController@profile',

	'as' => 'about'
     ]);