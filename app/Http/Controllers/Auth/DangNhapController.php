<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Input;
use Illuminate\Routing\Controller;

class DangNhapController extends Controller
{
	

	public function getUser()
	{
		$th = new ControllerDB();

		$txtSearch = Input::get('txtSearch');
		$priceStart = Input::get('Start');
		$priceEnd = Input::get('End');

		$news = $th->getNews();
		$NewsCate = $th->getNews_cate();
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productSelling = $th->getProductSelling();

        return View("fontend.signin.signin",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"news"=>$news,"NewsCate"=>$NewsCate,"ads"=>$ads,"productSelling"=>$productSelling));
	}	
}

?>