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
        $cateApps = $th->getCateApp();
        $tags = $th->getTags();
        $convert = new \App\Http\Controllers\convertString();

        $productdeal = $th->getProductDeal();

        return View("fontend.product.productdeal",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"productdeal"=>$productdeal,"ads"=>$ads,"productSelling"=>$productSelling,"cateApps"=>$cateApps,"convert"=>$convert,"tags"=>$tags));
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
        $cateApps = $th->getCateApp();
        $tags = $th->getTags();
        $convert = new \App\Http\Controllers\convertString();

        $products = $th->getProductWhereCategoryID($id,$name);

        return View("fontend.product.product",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"products"=>$products,"ads"=>$ads,"productSelling"=>$productSelling,"cateApps"=>$cateApps,"convert"=>$convert,"tags"=>$tags));

	}
	public function getProduct($id,$name)
	{
		$th = new ControllerDB();	
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productSelling = $th->getProductSelling();
        $cateApps = $th->getCateApp();
        $tags = $th->getTags();
        $convert = new \App\Http\Controllers\convertString();

        $products = $th->getProductWhereID($id,$name);
        $productsRefer=null;
        if(count($products)>0)
        	$productsRefer = $th->getProductRefer($products[0]->cate_id,$id);

        return View("fontend.product.detailproduct",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"products"=>$products,"ads"=>$ads,"productSelling"=>$productSelling,"productsRefer"=>$productsRefer,"cateApps"=>$cateApps,"convert"=>$convert,"tags"=>$tags));
	}
}

?>