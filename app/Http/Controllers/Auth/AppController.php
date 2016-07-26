<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Input;
use Illuminate\Routing\Controller;

class AppController extends Controller
{
	

	public function getApp($id,$name)
	{
		$th = new ControllerDB();

		

		$news = $th->getNews();
		$NewsCate = $th->getNews_cate();
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productSelling = $th->getProductSelling();
        $cateApps = $th->getCateApp();

        $apps = $th->getApp($id);

        return View("fontend.app.cateapp",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"news"=>$news,"NewsCate"=>$NewsCate,"ads"=>$ads,"productSelling"=>$productSelling,"cateApps"=>$cateApps,"apps"=>$apps));
	}
	public function getDetailApp($id,$name)
	{
		$th = new ControllerDB();


		$news = $th->getNews();
		$NewsCate = $th->getNews_cate();
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productSelling = $th->getProductSelling();
        $cateApps = $th->getCateApp();

        $detailapp = $th->getDetailApp($id);

        return View("fontend.app.detailapp",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"news"=>$news,"NewsCate"=>$NewsCate,"ads"=>$ads,"productSelling"=>$productSelling,"cateApps"=>$cateApps,"detailapp"=>$detailapp));
	}	
}

?>