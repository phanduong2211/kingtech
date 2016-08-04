<?php

namespace App\Http\Controllers\Admin;
use App\Website;
use Input;

class SettingController extends BaseController
{
	public function index()
	{
		if(!$this->checkPermission('info/list')){
			return $this->ErrorPermission('Cấu hình website');
		}

		$info=Website::where('name','background_image')
		->orWhere('name','background_color')
		->orWhere('name','background_menu')
		->orWhere('name','background_footer')
		->orWhere('name','background_body')
		->orWhere('name','background_color_menu')
		->orWhere('name','background_header')
		->orWhere('name','background_hover_menu')
		->orWhere('name','background_header_top')
		->get();
		$data=array();
		foreach ($info as $key => $value) {
			$data[$value->name]=$value->content;
		}

		
		return view("backend.setting.index",array('data'=>$data));
	}

	public function update(){
		$back_img=Input::get('background_image');

		if(strpos($back_img, "/public/")===0){
			
		}else{
			$back_img="/public/images/".$back_img;
		}

		$back_menu=Input::get('background_menu');

		if(strpos($back_menu, "/public/")===0){
			
		}else{
			$back_menu="/public/images/".$back_menu;
		}

		$info=new Website();
		$info->where('name','background_image')->update(array('content'=>$back_img));

		$info->where('name','background_menu')->update(array('content'=>$back_menu));

		$info->where('name','background_color')->update(array('content'=>Input::get('background_color')));

		$info->where('name','background_footer')->update(array('content'=>Input::get('background_footer')));

		$info->where('name','background_body')->update(array('content'=>Input::get('background_body')));

		$info->where('name','background_color_menu')->update(array('content'=>Input::get('background_color_menu')));

		$info->where('name','background_header')->update(array('content'=>Input::get('background_header')));

		$info->where('name','background_hover_menu')->update(array('content'=>Input::get('background_hover_menu')));

		$info->where('name','background_header_top')->update(array('content'=>Input::get('background_header_top')));

		return redirect('admin/setting')->with(['message'=>'Cập nhật thành công.']);
		

	}

}

?>