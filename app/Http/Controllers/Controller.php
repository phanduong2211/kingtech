<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Category;
use Illuminate\Database\Eloquent\Model;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getCategoryMenu()
    {
    	$categorys = Category::where("display",1)->get();
    	//return $categorys[0]->id;
    	return View("fontend.index",array("categorys"=>$categorys));
    }
}
