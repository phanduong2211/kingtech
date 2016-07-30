<?php

namespace App\Http\Controllers\Admin;


class IndexController extends BaseController
{
	public function index()
	{
		return view("backend.index");
	}
}

?>