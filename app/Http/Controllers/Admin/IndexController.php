<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
	public function index()
	{
	 	return view("backend.index");
	}
}

?>