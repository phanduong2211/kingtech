<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix'=>'admin','namespace' => 'Admin'],function(){
	Route::get("/","IndexController@index");

	Route::group(['prefix'=>'category'],function(){
		Route::get("/","CategoryController@index");
		Route::get("create","CategoryController@create");
		Route::post("create","CategoryController@postCreate");

		Route::get("{id}","CategoryController@update")->where('id','[0-9]+');
		Route::post("update","CategoryController@postUpdate");

		Route::post("delete","CategoryController@postDelete");

		Route::post("show_home","CategoryController@show_home");
		Route::post("display","CategoryController@display");

		Route::post("sort","CategoryController@sort");
	});

	Route::group(['prefix'=>'branch'],function(){
		Route::get("/","BranchController@index");

		Route::get("create","BranchController@create");
		Route::post("create","BranchController@postCreate");

		Route::get("{id}","BranchController@update")->where('id','[0-9]+');
		Route::post("update","BranchController@postUpdate");
		
		Route::post("delete","BranchController@postDelete");
		Route::post("deletes","BranchController@postDeletes");

		Route::post("sort","BranchController@sort");
	});
});

Route::get('/',"Controller@getCategoryMenu");
