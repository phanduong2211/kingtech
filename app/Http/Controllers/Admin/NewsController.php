<?php

namespace App\Http\Controllers\Admin;
use App\News;
use App\Http\Requests\NewsCateRequest;


class NewsController extends BaseController
{
	public function index()
	{
		if(!$this->checkPermission('news/list')){
			return $this->ErrorPermission('Tin tức');
		}

		$data=News::all();
		
		return view("backend.news.index",array('data'=>$data));
	}


	public function create(){
		if(!$this->checkPermission('news/create')){
			return $this->ErrorPermission('Thêm tin tức');
		}
		return view("backend.news.create");
	}

	public function postCreate(NewsCateRequest $request){

		if(!$this->checkPermission('news/create')){
			return $this->ErrorPermission('Thêm tin tức');
		}

		$newscate=new NewsCate();

		$newscate->url=$this->formatToUrl(trim($request->url));
		if(NewsCate::select('id')->where('url',$newscate->url)->count()>0){
			return redirect()->to('admin/news-category/create')->with(['message'=>'Url đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		
		$newscate->name=trim($request->name);
		$newscate->display=1;
		$newscate->show_home=1;

		if($newscate->save()){
			return redirect()->to('admin/news-category/create')->with('message','Thêm thành công.');
		}
		return redirect()->to('admin/news-category/create')->with(['message'=>'Có lỗi. Thêm thất bại','message_type'=>'danger']);
	}

	public function update($id){

		if(!$this->checkPermission('appcate/update')){
			return $this->ErrorPermission('Sửa loại ứng dụng');
		}

		$data=array();
		$data['data']=AppCate::find((int)$id);
		if($data['data']==null)
			return redirect()->to('admin/app-category')->with(['message'=>'Loại ứng dụng không tồn tại.','message_type'=>'danger']);
		if($data['data']->parent!=0){
			$data['listMenu']=AppCate::select('id','name','parent')->where('id','<>',$id)->where('parent',0)->get();
		}
		return view('backend.appcate.update',$data);
	}

	public function postUpdate(AppCateRequest $request){

		if(!$this->checkPermission('appcate/update')){
			return $this->ErrorPermission('Sửa loại ứng dụng');
		}

		$appcate=AppCate::find((int)$request->id);
		if($appcate==null)
			return redirect()->to('admin/app-category')->with(['message'=>'Loại ứng dụng không tồn tại.','message_type'=>'danger']);
		
		$appcate->parent=$request->parent;
		$appcate->url=$this->formatToUrl(trim($request->url));
		if(AppCate::select('id')->where('id','<>',(int)$request->id)->where('url',$appcate->url)->count()>0){
			return redirect()->to('admin/app-category/'.$request->id)->with(['message'=>'Url đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		
		$appcate->name=trim($request->name);
		$appcate->display=($request->display=='on')?1:0;
		
		if($appcate->save()){
			return redirect()->to('admin/app-category/'.$request->id)->with('message','Cập nhật thành công.');
		}
		return redirect()->to('admin/app-category/'.$request->id)->with(['message'=>'Có lỗi. Cập nhật thất bại','message_type'=>'danger']);
	}

	public function postDelete(){

		if(!$this->checkPermission('newscate/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=(int)\Input::get('data');

		if(NewsCate::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công loại tin tức {name}"]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa loại tin tức {name} thất bại"]);
	}

	public function postDeletes(){

		if(!$this->checkPermission('newscate/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=explode(',',\Input::get('data'));

		if(NewsCate::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công ".count($id)." loại tin tức."]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa loại tin tức thất bại"]);
	}

	public function display(){
		$id=(int)\Input::get('data');
		$display=\Input::get('ischeck');

		$display=($display=='true')?1:0;

		if(NewsCate::where('id',$id)->update(['display'=>$display])){
			return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
		}

		return json_encode(["success"=>false,"message"=>"Thất bại"]);
	}

	public function show_home(){
		$id=(int)\Input::get('data');
		$show_home=\Input::get('ischeck');

		$show_home=($show_home=='true')?1:0;

		if(NewsCate::where('id',$id)->update(['show_home'=>$show_home])){
			return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
		}

		return json_encode(["success"=>false,"message"=>"Thất bại"]);
	}

	public function sort(){
		$data=\Input::get('data');
		foreach(\Input::get('id') as $key=>$value){
			AppCate::where('id',$value)->update(['index'=>$data[$key]]);
		}

		return json_encode(["success"=>true]);
	}
}

?>