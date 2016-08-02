<?php

namespace App\Http\Controllers\Admin;


class IndexController extends BaseController
{
	public function index()
	{
		return view("backend.index");
	}

	public function removecookie(){
		\Cookie::queue(\Cookie::forget('role_data'));
		return "ok";
	}
}

?>