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
        //return $productSelling;
        return View("fontend.index",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website,"news_cate"=>$news_cate,"news"=>$news,"newsHot"=>$newsHot,"NewsCate"=>$NewsCate,"ads"=>$ads,"productSelling"=>$productSelling));
    }
}

?>