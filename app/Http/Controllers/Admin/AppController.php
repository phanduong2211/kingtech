<?php

namespace App\Http\Controllers\Admin;
use App\App;
use App\AppCate;
use App\Http\Requests\AppRequest;


class AppController extends BaseController
{
	public function index()
	{
		if(!$this->checkPermission('app/list')){
			return $this->ErrorPermission('Ứng dụng');
		}

		$data=App::orderBy('id','desc')->get();

		$listAppCate=AppCate::select('id','name')->get();
		
		return view("backend.app.index",array('data'=>$data,'listAppCate'=>$listAppCate));
	}


	public function create(){
		if(!$this->checkPermission('app/create')){
			return $this->ErrorPermission('Thêm ứng dụng');
		}

		$data=AppCate::select('id','name','parent')->get();

		return view("backend.app.create",array('data'=>$data));
	}

	public function postCreate(AppRequest $request){

		if(!$this->checkPermission('app/create')){
			return $this->ErrorPermission('Thêm ứng dụng');
		}

		$app=new App();


		$app->name=str_replace("\"", "'", trim($request->name));

		$app->url=$this->formatToUrl(trim($request->name));
		if(App::select('id')->where('url',$app->url)->count()>0){
			return redirect()->to('admin/app/create')->with(['message'=>'Url đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		$app->cate_id=(int)$request->cate_id;
		$app->image=$request->image;
		$app->description=str_replace("\"", "'", trim($request->description));
		$app->keywords=str_replace("\"", "'", trim($request->keywords));
		$app->content=$request->content;
		$app->status=trim($request->status);
		$app->capacity=trim($request->capacity);
		$app->require=trim($request->require);
		$app->version=trim($request->version);
		$app->developers=trim($request->developers);
		$app->app_url=trim($request->app_url);
		$app->display=1;

		if($app->save()){
			return redirect()->to('admin/app/create')->with('message','Thêm thành công.');
		}
		return redirect()->to('admin/app/create')->with(['message'=>'Có lỗi. Thêm thất bại','message_type'=>'danger']);
	}

	public function update($id){

		if(!$this->checkPermission('app/update')){
			return $this->ErrorPermission('Sửa ứng dụng');
		}

		$data=array();
		$data['data']=App::find((int)$id);
		if($data['data']==null)
			return redirect()->to('admin/app')->with(['message'=>'Ứng dụng không tồn tại.','message_type'=>'danger']);
		$data['listAppCate']=AppCate::select('id','name','parent')->get();
		return view('backend.app.update',$data);
	}

	public function postUpdate(AppRequest $request){

		if(!$this->checkPermission('news/update')){
			return $this->ErrorPermission('Sửa tin tức');
		}

		$app=App::find((int)$request->id);
		$app->name=str_replace("\"", "'", trim($request->name));

		$app->url=$this->formatToUrl(trim($request->url));
		if(App::select('id')->where('id','<>',(int)$request->id)->where('url',$app->url)->count()>0){
			return redirect()->to('admin/app/'.$request->id)->with(['message'=>'Url đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		$app->cate_id=(int)$request->cate_id;
		$app->image=$request->image;
		$app->description=str_replace("\"", "'", trim($request->description));
		$app->keywords=str_replace("\"", "'", trim($request->keywords));
		$app->content=$request->content;
		$app->status=trim($request->status);
		$app->capacity=trim($request->capacity);
		$app->require=trim($request->require);
		$app->version=trim($request->version);
		$app->developers=trim($request->developers);
		$app->app_url=trim($request->app_url);
		
		if($app->save()){
			return redirect()->to('admin/app/'.$request->id)->with('message','Cập nhật thành công.');
		}
		return redirect()->to('admin/app/'.$request->id)->with(['message'=>'Có lỗi. Cập nhật thất bại','message_type'=>'danger']);
	}

	public function postDelete(){

		if(!$this->checkPermission('app/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=(int)\Input::get('data');

		if(App::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công ứng dụng {name}"]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa ứng dụng {name} thất bại"]);
	}

	public function postDeletes(){

		if(!$this->checkPermission('app/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=explode(',',\Input::get('data'));

		if(App::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công ".count($id)." ứng dụng."]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa ứng dụng thất bại"]);
	}

	public function display(){
		$id=(int)\Input::get('data');
		$display=\Input::get('ischeck');

		$display=($display=='true')?1:0;

		if(App::where('id',$id)->update(['display'=>$display])){
			return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
		}

		return json_encode(["success"=>false,"message"=>"Thất bại"]);
	}

	public function hide(){
		$data=explode(',',\Input::get('data'));
		foreach($data as $item){
			App::where('id',(int)$item)->update(['display'=>0]);
		}


		return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
	}

	public function show(){
		$data=explode(',',\Input::get('data'));
		foreach($data as $item){
			App::where('id',(int)$item)->update(['display'=>1]);
		}


		return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
	}
}

?>