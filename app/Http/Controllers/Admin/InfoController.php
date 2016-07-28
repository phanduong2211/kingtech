<?php

namespace App\Http\Controllers\Admin;
use App\Website;
use Input;


class InfoController extends BaseController
{
	public function index()
	{
		if(!$this->checkPermission('info/list')){
			return $this->ErrorPermission('Thông tin website');
		}

		$info=Website::get();
		$data=array();
		foreach ($info as $key => $value) {
			$data[$value->name]=$value->content;
		}
		
		return view("backend.info.index",array('data'=>$data));
	}

	public function postinfoall(){
		$info=new Website();
		$info->where('name','title')->update(array('content'=>str_replace("\"", "'", trim(Input::get('title')))));
		$info->where('name','meta_description')->update(array('content'=>str_replace("\"", "'", trim(Input::get('meta_description')))));
		$info->where('name','meta_keywords')->update(array('content'=>str_replace("\"", "'", trim(Input::get('meta_keywords')))));
		$info->where('name','copyright')->update(array('content'=>trim(Input::get('copyright'))));


		$info->where('name','giay_phep')->update(array('content'=>trim(Input::get('giay_phep'))));

		$info->where('name','address')->update(array('content'=>trim(Input::get('address'))));

		return redirect('admin/info')->with(['message'=>'Cập nhật thành công thông tin chung.']);
	}

	public function contact(){
		$info=new Website();
		$info->where('name','hotline')->update(array('content'=>str_replace("\"", "'", trim(Input::get('hotline')))));
		$info->where('name','phone')->update(array('content'=>str_replace("\"", "'", trim(Input::get('phone')))));
		$info->where('name','facebook')->update(array('content'=>str_replace("\"", "'", trim(Input::get('facebook')))));
		$info->where('name','skype')->update(array('content'=>trim(Input::get('skype'))));


		$info->where('name','google')->update(array('content'=>trim(Input::get('google'))));

		$info->where('name','email')->update(array('content'=>trim(Input::get('email'))));

		return redirect('admin/info')->with(['message'=>'Cập nhật thành công thông tin liên hệ.']);
	}

	public function banhang(){
		$info=new Website();
		$info->where('name','sdt_mua_hang_tu_xa')->update(array('content'=>str_replace("\"", "'", trim(Input::get('sdt_mua_hang_tu_xa')))));
		$info->where('name','sdt_trung_tam_bh')->update(array('content'=>str_replace("\"", "'", trim(Input::get('sdt_trung_tam_bh')))));
		$info->where('name','sdt_dai_ly')->update(array('content'=>str_replace("\"", "'", trim(Input::get('sdt_dai_ly')))));
		$info->where('name','open_time')->update(array('content'=>trim(Input::get('open_time'))));


		$info->where('name','gio_bao_hanh')->update(array('content'=>trim(Input::get('gio_bao_hanh'))));


		return redirect('admin/info')->with(['message'=>'Cập nhật thành công thông tin mua/ban hàng.']);
	}

}

?>