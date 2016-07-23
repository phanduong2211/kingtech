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

	Route::group(['prefix'=>'menu'],function(){
		Route::get("/","MenuController@index");
		Route::get("create","MenuController@create");
		Route::post("create","MenuController@postCreate");

		Route::get("{id}","MenuController@update")->where('id','[0-9]+');
		Route::post("update","MenuController@postUpdate");

		Route::post("delete","MenuController@postDelete");

		Route::post("show_menu_top","MenuController@show_menu_top");
		Route::post("show_footer","MenuController@show_footer");

		Route::post("sort","MenuController@sort");
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

	Route::group(['prefix'=>'agency'],function(){
		Route::get("/","AgencyController@index");

		Route::get("create","AgencyController@create");
		Route::post("create","AgencyController@postCreate");

		Route::get("{id}","AgencyController@update")->where('id','[0-9]+');
		Route::post("update","AgencyController@postUpdate");
		
		Route::post("delete","AgencyController@postDelete");
		Route::post("deletes","AgencyController@postDeletes");

		Route::post("display_footer","AgencyController@display_footer");
	});

	Route::group(['prefix'=>'app-category'],function(){
		Route::get("/","AppCateController@index");
		Route::get("create","AppCateController@create");
		Route::post("create","AppCateController@postCreate");

		Route::get("{id}","AppCateController@update")->where('id','[0-9]+');
		Route::post("update","AppCateController@postUpdate");

		Route::post("delete","AppCateController@postDelete");

		Route::post("display","AppCateController@display");
	

		Route::post("sort","AppCateController@sort");
	});

	Route::group(['prefix'=>'news-category'],function(){
		Route::get("/","NewsCateController@index");
		Route::get("create","NewsCateController@create");
		Route::post("create","NewsCateController@postCreate");

		Route::get("{id}","NewsCateController@update")->where('id','[0-9]+');
		Route::post("update","NewsCateController@postUpdate");

		Route::post("delete","NewsCateController@postDelete");
		Route::post("deletes","NewsCateController@postDeletes");

		Route::post("display","NewsCateController@display");
		Route::post("show_home","NewsCateController@show_home");
	
	});

	Route::group(['prefix'=>'news'],function(){
		Route::get("/","NewsController@index");
		Route::get("create","NewsController@create");
		Route::post("create","NewsController@postCreate");

		Route::get("{id}","NewsController@update")->where('id','[0-9]+');
		Route::post("update","NewsController@postUpdate");

		Route::post("delete","NewsController@postDelete");
		Route::post("deletes","NewsController@postDeletes");

		Route::post("display","NewsController@display");
		Route::post("show_home","NewsController@show_home");
	
	});


});

Route::get('/',"Controller@getIndex");
