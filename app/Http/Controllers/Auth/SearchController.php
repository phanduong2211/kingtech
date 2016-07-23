<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Input;
use Illuminate\Routing\Controller;

class SearchController extends Controller
{
	public function getTimKiem()
	{
		$th = new ControllerDB();

		$txtSearch = Input::get('txtSearch');
		$priceStart = Input::get('Start');
		$priceEnd = Input::get('End');

		$products = $th->getSearch($txtSearch,$priceStart,$priceEnd);
		
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();

        return View("fontend.resultsearch",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"products"=>$products));
	}
}

?>