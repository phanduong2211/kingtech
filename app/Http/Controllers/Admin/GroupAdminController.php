<?php

namespace App\Http\Controllers\Admin;
use App\GroupAdmin;
use App\GroupRole;
use App\Role;
use App\AdminGroupRole;
use App\Http\Requests\GroupAdminRequest;


class GroupAdminController extends BaseController
{
	public function index()
	{
		if(!$this->checkPermission('groupadmin/list')){
			return $this->ErrorPermission('Nhóm Admin');
		}

		$data=GroupAdmin::orderBy('id','desc')->get();

		return view("backend.ad.index",array('data'=>$data));
	}


	public function create(){
		if(!$this->checkPermission('groupadmin/create')){
			return $this->ErrorPermission('Thêm nhóm admin');
		}

		$grouprole=GroupRole::all();
		$roles=Role::all();

		return view("backend.groupadmin.create",array('grouprole'=>$grouprole,'roles'=>$roles));
	}

	public function postCreate(GroupAdminRequest $request){

		if(!$this->checkPermission('groupadmin/create')){
			return $this->ErrorPermission('Thêm nhóm admin');
		}

		$group=new GroupAdmin();


		$group->name=str_replace("\"", "'", trim($request->name));

		if($group->save()){

			if($request->has('CheckRoles')){
				$arr=array();
				foreach($request->CheckRoles as $item){
					$a=array();
					$a['group_id']=$group->id;
					$a['role_id']=$item;

					$arr[]=$a;
				}

				AdminGroupRole::insert($arr);
			}

			return redirect()->to('admin/group-admin/create')->with('message','Thêm thành công.');
		}
		return redirect()->to('admin/group-admin/create')->with(['message'=>'Có lỗi. Thêm thất bại','message_type'=>'danger']);
		
		
	}

	public function update($id){

		if(!$this->checkPermission('ad/update')){
			return $this->ErrorPermission('Sửa quảng cáo');
		}

		$data=array();
		$data['data']=Ads::find((int)$id);
		if($data['data']==null)
			return redirect()->to('admin/ad')->with(['message'=>'Quảng cáo không tồn tại.','message_type'=>'danger']);
		
		return view('backend.ad.update',$data);
	}

	public function postUpdate(AdRequest $request){

		if(!$this->checkPermission('ad/update')){
			return $this->ErrorPermission('Sửa quảng cáo');
		}

		$ad=Ads::find((int)$request->id);
		$ad->title=str_replace("\"", "'", trim($request->title));

		
		$ad->url=$request->url;
		$ad->image=$request->image;
		$ad->position=(int)$request->position;
		
		
		if($ad->save()){
			return redirect()->to('admin/ad/'.$request->id)->with('message','Cập nhật thành công.');
		}
		return redirect()->to('admin/ad/'.$request->id)->with(['message'=>'Có lỗi. Cập nhật thất bại','message_type'=>'danger']);
	}

	public function postDelete(){

		if(!$this->checkPermission('ad/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=(int)\Input::get('data');

		if(Ads::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công quảng cáo {name}"]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa quảng cáo {name} thất bại"]);
	}

	public function postDeletes(){

		if(!$this->checkPermission('ad/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=explode(',',\Input::get('data'));

		if(Ads::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công ".count($id)." quảng cáo."]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa quảng cáo thất bại"]);
	}

	public function display(){
		$id=(int)\Input::get('data');
		$display=\Input::get('ischeck');

		$display=($display=='true')?1:0;

		if(Ads::where('id',$id)->update(['display'=>$display])){
			return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
		}

		return json_encode(["success"=>false,"message"=>"Thất bại"]);
	}
}

?>