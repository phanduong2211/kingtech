<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use View;
use Illuminate\Database\Eloquent\Model;
class IndexController extends Controller
{
    public function getIndex()
    {
        $th = new ControllerDB();
        // return "lkdfs";
        $getCategorys = $th->getCategoryMenu();
        $menus = $th->getMenu();
        $slides =$th->getSlideShow();
        $website = $th->getWebsite();
        $news_cate = $th->getNews_cateWhere();
        $NewsCate = $th->getNews_cate();
        $cate_id=0;
        if(count($news_cate)>0)
        {
            $cate_id = $news_cate[0]->id;
        }
        //$convertString = new convertString();
        $news = $th->getNewsWhere($cate_id);
        $newsHot = $th->getNews_hot();
        $ads = $th->getAds();
        $productSelling = $th->getProductSelling();
        $cateApps = $th->getCateApp();
        $convert = new \App\Http\Controllers\convertString();

        $newproducts = $th->getNewProduct();
        $categoryMenuIndex = $th->getCategoryMenuIndex();
        $productCateIDIndex = $this;

        
        
        //return $productSelling;
        return View("fontend.index",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"news_cate"=>$news_cate,"news"=>$news,"newsHot"=>$newsHot,"NewsCate"=>$NewsCate,"ads"=>$ads,"productSelling"=>$productSelling,"newproducts"=>$newproducts,"categoryMenuIndex"=>$categoryMenuIndex,"productCateIDIndex"=>$productCateIDIndex,"cateApps"=>$cateApps,"convert"=>$convert));
    }
    public function getProdctCateID($cate_id)
    {
        $th = new ControllerDB();
        return $th->getProductIndex($cate_id);
    }
}

?>