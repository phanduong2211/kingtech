<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Input;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{
	public function getProductPromotion()
	{

		$th = new ControllerDB();

		/*$txtSearch = Input::get('txtSearch');
		$priceStart = Input::get('ddStart');
		$priceEnd = Input::get('ddEnd');
		//return $priceStart;
		$products = $th->getSearch($txtSearch,$priceStart,$priceEnd);*/
		
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productpromotion = $th->getProductPromotion();

        $productdeal = $th->getProductDeal();

        return View("fontend.product",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"productdeal"=>$productdeal,"ads"=>$ads,"productpromotion"=>$productpromotion));
	}
}

?>