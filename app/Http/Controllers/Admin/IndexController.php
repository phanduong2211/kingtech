<?php

namespace App\Http\Controllers\Admin;
use App\Admin;
use Carbon\Carbon;

class IndexController extends BaseController
{
	public function index()
	{
		$now=Carbon::now();
		$data=Admin::select(\DB::raw('(select sum(quantity) from statistics_online where id2 like "%'.$now->month.$now->year.'") as omonth,(select quantity from statistics_online where id2='.$now->day.$now->month.$now->year.') as oday,(select count(id) from user_online where TIMESTAMPDIFF(MINUTE,last_visit,CONVERT_TZ(NOW(),@@session.time_zone,"+07:00"))<6) as o,
			(select sum(quantity) from statistics_online) as s,(select count(id) from products) as sanpham'))
		->first();
		return view("backend.index",array('data'=>$data));
	}

	public function removecookie(){
		\Cookie::queue(\Cookie::forget('role_data'));
		return "ok";
	}
}

?>