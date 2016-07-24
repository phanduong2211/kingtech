<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Category;
use App\Menu;
use App\News;
use App\SlideShow;
use App\Product;
use App\NewsCate;
use App\Website;
use App\Ads;
use Illuminate\Database\Eloquent\Model;
class ControllerDB extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /* return table in database*/
    public function getCategoryMenu()
    {
    	$categorys = Category::where("display",1)->orderBy("sort_menu","asc")->get();
    	return $categorys;    	
    }

    public function getMenu()
    {
    	$menus = Menu::orderby("index","asc")->get();
    	return $menus;
    }
    public function getSlideShow()
    {
    	$slides = SlideShow::orderby("index","asc")->where("display",1)->get();
    	return $slides;
    }
    public function getWebsite()
    {
    	$website = Website::get();
    	return $website;
    }
    public function getNews()
    {
        $news = News::orderby("id","desc")->paginate(10);
        return $news;
    }
    public function getNewsWhere($newscate)
    {
    	$newsShowHome = News::orderby("id","asc")->where("cate_id",$newscate)->take(3)->get();
    	return $newsShowHome;
    }
    public function getNewsWhereID($id)
    {
        $detailnews = News::where("id",$id)->get();
        return $detailnews;
    }
    public function getNews_cateWhere()
    {
    	$news_cateWhere = NewsCate::orderby("id","asc")->where("display",1)->where("show_home",1)->get();
    	return $news_cateWhere;
    }
    public function getNews_cate()
    {
        $news_cate = NewsCate::orderby("id","asc")->where("display",1)->get();
        return $news_cate;
    }
    public function getNews_hot()
    {
    	$newsHot = News::orderby("id","asc")->where("hot",1)->get();
    	return $newsHot;
    }
    public function getSearch($txtSearch,$priceStart,$priceEnd)
    {
        //return 1;
        $products = 0;
        if($priceStart==0 && $priceEnd==0)
        {
            $products = Product::where("display","=",1)->orderby("index_home","asc")->where("name","like","%".$txtSearch."%")->paginate(16);
        }
        elseif($priceStart==0)
        {
            $products = Product::where("display","=",1)->orderby("index_home","asc")->where("price","<=",$priceEnd)->where("name","like","%".$txtSearch."%")->paginate(16);
        }
        elseif($priceEnd==0)
        {
            $products = Product::where("display","=",1)->orderby("index_home","asc")->where("price","<=",$priceStart)->where("name","like","%".$txtSearch."%")->paginate(16);
        }
        else 
        {
            $products = Product::where("display","=",1)->orderby("index_home","asc")->where("price",">=",$priceStart)->where("price","<=",$priceEnd)->where("name","like","%".$txtSearch."%")->paginate(16);
        }
        return $products;
    }
    public function getNewsWhereCateID($id,$name)
    {
        $newsCate = News::where("cate_id",$id)->paginate(10);
        return $newsCate;
    }
    public function getNewsReferWhereCateID($id)
    {
        $newsRefer = News::where("cate_id",$id)->get();
        return $newsRefer;
    }
    public function getAds()
    {
        $ads = Ads::where("display","=",1)->get();
        return $ads;
    }
    
}
