<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Input;
use Illuminate\Routing\Controller;
use Session;
use Redirect;

class DaiLyController extends Controller
{
	public function getBranches()
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
            $convert = new \App\Http\Controllers\convertString();

            $branches = $th->getBranches();

        return View("fontend.branches.branches",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"news"=>$news,"NewsCate"=>$NewsCate,"ads"=>$ads,"productSelling"=>$productSelling,"cateApps"=>$cateApps,"branches"=>$branches,"convert"=>$convert));
        }
        public function getAgencys($id,$name)
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
            $convert = new \App\Http\Controllers\convertString();

            $agencys = $th->getAgencys($id);
            $branche=null;
            if(count($agencys)>0)
                $branche = $th->getBranche($agencys[0]->branch_id);

        return View("fontend.branches.agencys",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"news"=>$news,"NewsCate"=>$NewsCate,"ads"=>$ads,"productSelling"=>$productSelling,"cateApps"=>$cateApps,"agencys"=>$agencys,"convert"=>$convert,"branche"=>$branche));
        }
}

?>