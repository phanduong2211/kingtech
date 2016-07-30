<?php

namespace App\Http\Controllers\Admin;
use App\Admin;
use App\GroupAdmin;
use App\Http\Requests\AdminRequest;
use Carbon\Carbon;


class AdminController extends BaseController
{
	public function index()
	{
		if(!$this->checkPermission('admin/list')){
			return $this->ErrorPermission('Admin');
		}

		$data=Admin::orderBy('id','desc')->get();
		$listGroup=GroupAdmin::select('id','name')->get();

		return view("backend.admin.index",array('data'=>$data,'listGroup'=>$listGroup));
	}


	public function create(){
		if(!$this->checkPermission('admin/create')){
			return $this->ErrorPermission('Thêm Admin');
		}

		$data=GroupAdmin::select('id','name')->get();

		return view("backend.admin.create",array("data"=>$data));
	}

	private function CopyAvatar($name){
		copy(public_path().'/images/noavatar.png', public_path().'/images/avatar/'.$name);
	}

	public function postCreate(AdminRequest $request){

		if(!$this->checkPermission('admin/create')){
			return $this->ErrorPermission('Thêm admin');
		}

	
		if(Admin::select('id')->where('username',trim($request->username))->count()>0){
			return redirect()->to('admin/admin/create')->with(['message'=>'Username đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		if(Admin::select('id')->where('email',trim($request->email))->count()>0){
			return redirect()->to('admin/admin/create')->with(['message'=>'Email đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		$admin=new Admin();

		$admin->name=trim($request->name);
		$admin->username=trim($request->username);
		$admin->email=trim($request->email);
		$admin->phone=trim($request->phone);
		$admin->password=bcrypt(trim($admin->password));
		$admin->group_id=$request->group_id;
		$admin->block=0;

		$admin->after_last_visit = Carbon::now()->toDateTimeString();
		$admin->last_visit=$admin->after_last_visit;

		if($admin->save()){
			$imagename = $admin->id.".jpg";
			try{
				if ($request->hasFile('avatar'))
			    {
			        $file = $request->file('avatar');
			        
			        $file->move(public_path().'/images/avatar/', $imagename);
			    }else{
			    	$this->CopyAvatar($imagename);
			    }
			}catch(\Exception $e){
				$this->CopyAvatar($imagename);
			}
			return redirect()->to('admin/admin/create')->with('message','Thêm thành công.');
		}
		return redirect()->to('admin/admin/create')->with(['message'=>'Có lỗi. Thêm thất bại','message_type'=>'danger']);
	}

	public function update($id){

		if(!$this->checkPermission('user/update')){
			return $this->ErrorPermission('Sửa người dùng');
		}

		$data=array();
		$data['data']=User::find((int)$id);
		if($data['data']==null)
			return redirect()->to('admin/user')->with(['message'=>'Người dùng không tồn tại.','message_type'=>'danger']);
		
		return view('backend.user.update',$data);
	}

	public function postUpdate(UserRequest $request){

		if(!$this->checkPermission('user/update')){
			return $this->ErrorPermission('Sửa người dùng');
		}

		$user=User::find((int)$request->id);

		$user->fill($request->all());

		$user->username=trim($request->username);
	
		if(User::select('id')->where('id','<>',(int)$request->id)->where('username',$request->username)->count()>0){
			return redirect()->to('admin/user/'.$request->id)->with(['message'=>'Username đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}
		
		
		if($user->save()){
			return redirect()->to('admin/user/'.$request->id)->with('message','Cập nhật thành công.');
		}
		return redirect()->to('admin/user/'.$request->id)->with(['message'=>'Có lỗi. Cập nhật thất bại','message_type'=>'danger']);
	}

	public function postDelete(){

		if(!$this->checkPermission('user/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=(int)\Input::get('data');

		if(User::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công người dùng {name}"]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa người dùng {name} thất bại"]);
	}

	public function postDeletes(){

		if(!$this->checkPermission('user/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=explode(',',\Input::get('data'));

		if(User::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công ".count($id)." người dùng."]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa người dùng thất bại"]);
	}

	public function block(){
		if(!$this->checkPermission('admin/block')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền khóa"]);
		}
		$id=(int)\Input::get('data');
		$block=\Input::get('ischeck');

		$block=($block=='true')?1:0;

		if(Admin::where('id',$id)->update(['block'=>$block])){
			return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
		}

		return json_encode(["success"=>false,"message"=>"Thất bại"]);
	}

	public function postBlocks(){
		if(!$this->checkPermission('admin/block')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền khóa"]);
		}
		$data=explode(',',\Input::get('data'));
		foreach($data as $item){
			Admin::where('id',(int)$item)->update(['block'=>1]);
		}


		return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
	}

	public function postUnlocks(){
		if(!$this->checkPermission('user/block')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền mở khóa"]);
		}
		$data=explode(',',\Input::get('data'));
		foreach($data as $item){
			User::where('id',(int)$item)->update(['block'=>0]);
		}


		return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
	}

	public function reset(){
		if(!$this->checkPermission('user/reset')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền reset pass"]);
		}

		$id=(int)\Input::get('data');
		$pass=trim(\Input::get('pass'));

		if($pass==""){
			return json_encode(["success"=>false,"message"=>"Vui lòng nhập mật khẩu mới"]);
		}

		if(User::where('id',$id)->update(['password'=>\Hash::make($pass)])){
			return json_encode(["success"=>true,"message"=>"Cập nhật mật khẩu thành công"]);
		}else{
			return json_encode(["success"=>false,"message"=>"Cập nhật mật khẩu thất bại"]);
		}
	}
}

?>