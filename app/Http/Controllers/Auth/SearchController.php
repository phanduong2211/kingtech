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
		$priceStart = Input::get('ddStart');
		$priceEnd = Input::get('ddEnd');
		//return $priceStart;
		$products = $th->getSearch($txtSearch,$priceStart,$priceEnd);
		
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productpromotion = $th->getProductPromotion();

        return View("fontend.resultsearch",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"products"=>$products,"ads"=>$ads,"productpromotion"=>$productpromotion));
	}
}

?>