<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Category;
use App\Menu;
use App\SlideShow;
use App\Website;
use Illuminate\Database\Eloquent\Model;
class Controller extends BaseController
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
    /* return pages view*/
    public function getIndex()
    {

    	$getCategorys = $this->getCategoryMenu();
    	$menus = $this->getMenu();
    	$slides =$this->getSlideShow();
    	$website = $this->getWebsite();
    	return View("fontend.index",array("categorys"=>$getCategorys,"menus"=>$menus,"slides"=>$slides,"website"=>$website));
    }
}
