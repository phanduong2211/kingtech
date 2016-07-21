<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class BaseController extends Controller
{
	protected function checkPermission($key)
	{
		return true;
	}

	protected function ErrorPermission($page=''){
		return redirect('error/permission?page='.$page);
	}
}

?>