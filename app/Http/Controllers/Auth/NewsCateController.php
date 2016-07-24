<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Input;
use Illuminate\Routing\Controller;

class NewsCateController extends Controller
{
	public function getNewsOfCate($id,$name)
	{
		$th = new ControllerDB();

		$txtSearch = Input::get('txtSearch');
		$priceStart = Input::get('Start');
		$priceEnd = Input::get('End');

		$news = $th->getNewsWhereCateID($id,$name);
		$NewsCate = $th->getNews_cate();
		
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productpromotion = $th->getProductPromotion();
        return View("fontend.newscate",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"news"=>$news,"NewsCate"=>$NewsCate,"ads"=>$ads,"productpromotion"=>$productpromotion));
	}

	public function getNews()
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
        $productpromotion = $th->getProductPromotion();

        return View("fontend.newscate",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"news"=>$news,"NewsCate"=>$NewsCate,"ads"=>$ads,"productpromotion"=>$productpromotion));
	}
	public function getDetailNews($catename,$id,$name)
	{
		$th = new ControllerDB();

		$txtSearch = Input::get('txtSearch');
		$priceStart = Input::get('Start');
		$priceEnd = Input::get('End');

		$detailnews = $th->getNewsWhereID($id);
		$newsRefer = 0;
		if(count($detailnews)>0) 
			{
				$newsRefer = $th->getNewsReferWhereCateID($detailnews[0]->cate_id);
			}

		$NewsCate = $th->getNews_cate();
		
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $ads = $th->getAds();
        $productpromotion = $th->getProductPromotion();

        return View("fontend.news",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"detailnews"=>$detailnews,"NewsCate"=>$NewsCate,"newsRefer"=>$newsRefer,"ads"=>$ads,"productpromotion"=>$productpromotion));
	}
}

?>