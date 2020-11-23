<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('jwt.auth')->get('/user', function () {
    return response()->json(auth()->user());
});

Route::post('Auth/login', 'API\AuthController@login');
Route::middleware('jwt.auth')->group(function(){
    
    Route::get('Auth/logout', 'API\AuthController@logout');
});

Route::group([
    'prefix'        => 'auth/admin'
], function () {
    
    //TAGS
    Route::post('/create/tag', 'ApiController@tags');
    Route::post('/delete/tag', 'ApiController@deletetags');
    Route::post('/update/tag', 'ApiController@updatetags');
    Route::get('/show/tag', 'ApiController@showtags');


    //POST
    Route::get('/show/post', 'ApiController@post');
    Route::get('/show/post/trashed', 'ApiController@posttrash');
    Route::post('/trashed/post', 'ApiController@trashed');
    Route::post('/restore/post', 'ApiController@restore');
    Route::post('/delete/post', 'ApiController@delete');
    Route::post('/str/post', 'ApiController@addPost');
     Route::post('/up/post', 'ApiController@upPost');

    //CATEGORY
    Route::get('/show/category', 'ApiController@showcategory');
    Route::post('/delete/category', 'ApiController@deletecategory');
    Route::post('/str/ctgr', 'ApiController@addCtg');
    Route::post('/update/cat', 'ApiController@upCatg');

    //Setting
    Route::get('/show/setting', 'ApiController@showSet');
    Route::post('/update/seting', 'ApiController@Settings');

    //Profile
    Route::post('/update/prov', 'ApiController@upProf');
}); 

//POST
Route::get('/front/show/post', 'ApiFrontController@showpost');
Route::get('/front/show/post/{id}', 'ApiFrontController@showdetailpost');
Route::get('/front/show/first/post', 'ApiFrontController@showfirstpost');
Route::get('/show/post/trashed', 'ApiFrontController@posttrash');
Route::post('/str/post', 'ApiFrontController@addPost');

//CATEGORY
Route::get('/front/show/category', 'ApiFrontController@showcategory');
Route::get('/front/show/post/category/{id}', 'ApiFrontController@showcategorypost');

//TAGS
Route::get('/front/show/tag', 'ApiFrontController@showtag');
Route::get('/front/show/tag/{id}', 'ApiFrontController@showdetailtag');

//Setting
Route::get('/show/setting', 'ApiFrontController@showSet');
Route::get('/show/provile', 'ApiFrontController@showProv');