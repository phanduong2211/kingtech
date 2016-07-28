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
use App\App;
use App\AppCate;
use App\User;
use App\Branch;
use App\Video;
use App\Agency;
use App\Tag;
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
    public function getNewProduct()
    {
        $newproducts = Product::orderby("index_home","asc")->where("display",1)->where("show_home",1)->where("status",0)->take(10)->get();
            return $newproducts;
    }
    public function getProductIndex($cate_id)
    {
        $productsIndex = Product::orderby("index_home","asc")->where("display",1)->where("show_home",1)->where("cate_id",$cate_id)->get();
            return $productsIndex;
    }
    public function getAds()
    {
        $ads = Ads::where("display","=",1)->get();
        return $ads;
    }
    public function getProductSelling()
    {
            $productSelling = Product::orderby("sold","desc")->where("display",1)->take(10)->get();
            return $productSelling;
    }
    public function getProductDeal()
    {
        $productdeal = Product::orderby("price","asc")->where("display",1)->paginate(30);
            return $productdeal;
    }
    public function getProductWhereCategoryID($id,$name)
    {
        $products = Product::orderby("price","asc")->where("display",1)->where("cate_id",$id)->paginate(30);
            return $products;
    }
    public function getCategoryMenuIndex()
    {
        $categorysIndex = Category::where("display",1)->orderBy("sort_home","asc")->where("show_home",1)->get();
        return $categorysIndex;
    }
    public function getProductRefer($id,$idproduct)
    {
        $products = Product::orderby("price","asc")->where("display",1)->where("cate_id",$id)->where('id','!=',$idproduct)->take(10)->get();
            return $products;
    }
    public function getProductWhereID($id,$name)
    {

        $products = Product::where("display",1)->where("id",$id)->get();
            if(count($products)>0) //update lượt view product
            {
                Product::where("id",$id)->update(['viewer' => ($products[0]->viewer+1)]);
            }
            return $products;
    }
    public function getCateApp()
    {
        $cateApps = AppCate::where("display",1)->orderby("index","asc")->get();
        return $cateApps;
    }
    public function getApp($idCate)
    {
        $apps = App::where("display",1)->where("cate_id",$idCate)->paginate(10);
        return $apps;
    }
    public function getDetailApp($id)
    {
        $detailapp = App::where("display",1)->where("id",$id)->get();
        return $detailapp;
    }
    public function getUser($username,$pass)
    {
        $user = User::where("username",$username)->where("password",$pass)->get();
        return $user;
    }
    public function getVideos()
    {
        $videos = Video::where("display",1)->paginate(10);
        return $videos;
    }
    public function getVideo($id,$name)
    {
        $video = Video::where("display",1)->where("id",$id)->get();
        return $video;
    }
    public function getVideosRefer($id)
    {
        $videosRefer = Video::where("display",1)->where("id","!=",$id)->take(10)->get();
        return $videosRefer;
    }
    public function getBranches()
    {
        $branches = Branch::orderby("index","asc")->get();
        return $branches;
    }
    public function getAgencys($id)
    {
        $agencys = Agency::where("branch_id",$id)->get();
        return $agencys;
    }
    public function getAgency()
    {
        $agency = Agency::where("display_footer",1)->get();
        return $agency;
    }
    public function getBranche($id)
    {
        $branche = Branch::where("id",$id)->get();
        return $branche;
    }
    public function getTags()
    {
        $tags = Tag::where("display",1)->orderby("index","asc")->get();
        return $tags;
    }

}
