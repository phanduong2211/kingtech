<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Input;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{
	public function getProductSelling()
	{

		$th = new ControllerDB();	
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productSelling = $th->getProductSelling();

        $productdeal = $th->getProductDeal();

        return View("fontend.productdeal",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"productdeal"=>$productdeal,"ads"=>$ads,"productSelling"=>$productSelling));
	}
	public function getCategory($id,$name)
	{
		$th = new ControllerDB();	
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productSelling = $th->getProductSelling();

        $products = $th->getProductWhereCategoryID($id,$name);

        return View("fontend.product",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"products"=>$products,"ads"=>$ads,"productSelling"=>$productSelling));

	}
}

?>