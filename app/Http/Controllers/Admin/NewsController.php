<?php

namespace App\Http\Controllers\Admin;
use App\News;
use App\NewsCate;
use App\Http\Requests\NewsRequest;


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

		$data=NewsCate::select('id','name')->get();

		return view("backend.news.create",array('data'=>$data));
	}

	public function postCreate(NewsRequest $request){

		if(!$this->checkPermission('news/create')){
			return $this->ErrorPermission('Thêm tin tức');
		}

		$news=new News();


		$news->title=str_replace("\"", "'", trim($request->title));

		$news->url=$this->formatToUrl(trim($request->title));
		if(News::select('id')->where('url',$news->url)->count()>0){
			return redirect()->to('admin/news/create')->with(['message'=>'Url đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		$news->cate_id=(int)$request->cate_id;
		$news->image=$request->image;
		$news->hot=0;
		$news->description=str_replace("\"", "'", trim($request->description));
		$news->keywords=str_replace("\"", "'", trim($request->keywords));
		$news->content=$request->content;
		$news->display=1;
		$news->viewer=0;

		if($news->save()){
			return redirect()->to('admin/news/create')->with('message','Thêm thành công.');
		}
		return redirect()->to('admin/news/create')->with(['message'=>'Có lỗi. Thêm thất bại','message_type'=>'danger']);
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