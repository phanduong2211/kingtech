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



	Route::group(['prefix'=>'news'],function(){
		Route::get("/","NewsController@index");
		Route::get("create","NewsController@create");
		Route::post("create","NewsController@postCreate");

		Route::get("{id}","NewsController@update")->where('id','[0-9]+');
		Route::post("update","NewsController@postUpdate");

		Route::post("delete","NewsController@postDelete");
		Route::post("deletes","NewsController@postDeletes");

		Route::post("hot","NewsController@hot");
		Route::post("display","NewsController@display");

		Route::post("hots","NewsController@hots");
		Route::post("displays","NewsController@displays");
	
	});

	Route::group(['prefix'=>'app'],function(){
		Route::get("/","AppController@index");
		Route::get("create","AppController@create");
		Route::post("create","AppController@postCreate");

		Route::get("{id}","AppController@update")->where('id','[0-9]+');
		Route::post("update","AppController@postUpdate");

		Route::post("delete","AppController@postDelete");
		Route::post("deletes","AppController@postDeletes");

		Route::post("hot","AppController@hot");
		Route::post("display","AppController@display");

		Route::post("hots","AppController@hots");
		Route::post("displays","AppController@displays");
	
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

	Route::get("uploadimage","UploadController@upload");
    Route::post("uploadimage","UploadController@upload");
    Route::post("ajax/loadfolder","UploadController@loadfolder");
    Route::post("upload/checkfile","UploadController@checkfile");
    Route::post("ajax/removeimg","UploadController@removeimg");
    Route::post("ajax/removefolder","UploadController@removefolder");
    Route::post("ajax/count","IndexController@count");
    Route::post("ajax/createfolder","UploadController@createfolder");
    Route::post("ajax/loadonlyfolder","UploadController@loadonlyfolder");


    Route::group(['prefix'=>'tag'],function(){
		Route::get("/","TagController@index");
		Route::get("create","TagController@create");
		Route::post("create","TagController@postCreate");

		Route::get("{id}","TagController@update")->where('id','[0-9]+');
		Route::post("update","TagController@postUpdate");

		Route::post("delete","TagController@postDelete");

		Route::post("display","TagController@display");
	

		Route::post("sort","TagController@sort");
	});

	Route::group(['prefix'=>'support'],function(){
		Route::get("/","SupportController@index");

		Route::get("create","SupportController@create");
		Route::post("create","SupportController@postCreate");

		Route::get("{id}","SupportController@update")->where('id','[0-9]+');
		Route::post("update","SupportController@postUpdate");
		
		Route::post("delete","SupportController@postDelete");
		Route::post("deletes","SupportController@postDeletes");

		Route::post("display","SupportController@display");
	});

});



Route::group(['namespace' => 'Auth'], function()
{
	Route::get('/',"IndexController@getIndex");
	Route::get('deal.html','ProductsController@getProductSelling');
	Route::get("tim-kiem.html","SearchController@getTimKiem");

	Route::group(['prefix'=>'tin-tuc'],function(){
		Route::get("/","NewsCateController@getNews");
		Route::get("{id}-{name}","NewsCateController@getNewsOfCate");
		Route::get("{catename}/{id}-{name}.html","NewsCateController@getDetailNews");
	});
	Route::group(["prefix"=>"category"],function(){
		Route::get("{id}-{name}","ProductsController@getCategory");
	});
	Route::group(["prefix"=>"product"],function(){
		Route::get("{id}-{name}","ProductsController@getProduct");
	});
});

