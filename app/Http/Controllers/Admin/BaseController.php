<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class BaseController extends Controller
{
	protected function checkPermission($key)
	{
		return true;
	}

	protected function ErrorPermission($page=''){
		return redirect('error/permission?page='.$page);
	}


	protected function KhongDau($str){
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);

		return $str;
	}

	protected function formatToUrl($name){

		$name=$this->KhongDau(trim(mb_strtolower($name,'UTF-8')));

		if (preg_match_all("/[a-za-z0-9- ]*/", $name, $matches)) {
			$str="";
			foreach($matches[0] as $value)
	        {
	        	$str.=$value;
	        }

			$str=str_replace(" ", "-", $str);
			$str=str_replace("--", "-", $str);
			$str=str_replace("--", "-", $str);
			return $str;		  
		}



		return $name;

	}
}

?>