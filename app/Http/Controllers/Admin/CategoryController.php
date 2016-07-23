<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use App\Http\Requests\CategoryRequest;


class CategoryController extends BaseController
{
	public function index()
	{
		if(!$this->checkPermission('category/list')){
			return $this->ErrorPermission('Loại sản phẩm');
		}

		$data=Category::all();
		
		return view("backend.category.index",array('data'=>$data));
	}


	public function create(){
		if(!$this->checkPermission('category/create')){
			return $this->ErrorPermission('Thêm loại sản phẩm');
		}

		$data=Category::select('id','parent','name')->get();

		return view("backend.category.create",array('data'=>$data));
	}

	public function postCreate(CategoryRequest $request){

		if(!$this->checkPermission('category/create')){
			return $this->ErrorPermission('Thêm loại sản phẩm');
		}

		$category=new Category();

		$category->parent=$request->parent;
		$category->url=$this->formatToUrl(trim($request->url));
		if(Category::select('id')->where('url',$category->url)->count()>0){
			return redirect()->to('admin/category/create')->with(['message'=>'Url đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		$category->meta_description=trim($request->meta_description);
		$category->meta_keywords=trim($request->meta_keywords);
		$category->name=trim($request->name);
		$category->sort_home=0;
		$category->sort_menu=0;
		$category->display=1;
		$category->show_home=($request->show_home=='on')?1:0;

		if($category->save()){
			return redirect()->to('admin/category/create')->with('message','Thêm thành công.');
		}
		return redirect()->to('admin/category/create')->with(['message'=>'Có lỗi. Thêm thất bại','message_type'=>'danger']);
	}

	public function update($id){

		if(!$this->checkPermission('category/update')){
			return $this->ErrorPermission('Sửa loại sản phẩm');
		}

		$data=array();
		$data['data']=Category::find((int)$id);
		if($data['data']==null)
			return redirect()->to('admin/category')->with(['message'=>'Loại sản phẩm không tồn tại.','message_type'=>'danger']);
		$data['listCategory']=Category::select('id','name','parent')->where('id','<>',$id)->where('parent','<>',$id)->get();
		return view('backend.category.update',$data);
	}

	public function postUpdate(CategoryRequest $request){

		if(!$this->checkPermission('category/update')){
			return $this->ErrorPermission('Sửa loại sản phẩm');
		}

		$category=Category::find((int)$request->id);
		if($category==null)
			return redirect()->to('admin/category')->with(['message'=>'Loại sản phẩm không tồn tại.','message_type'=>'danger']);
		
		$category->parent=$request->parent;
		$category->url=$this->formatToUrl(trim($request->url));
		if(Category::select('id')->where('id','<>',(int)$request->id)->where('url',$category->url)->count()>0){
			return redirect()->to('admin/category/'.$request->id)->with(['message'=>'Url đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		$category->meta_description=trim($request->meta_description);
		$category->meta_keywords=trim($request->meta_keywords);
		$category->name=trim($request->name);
		$category->sort_home=0;
		$category->sort_menu=0;
		$category->display=1;
		$category->show_home=($request->show_home=='on')?1:0;
		
		if($category->save()){
			return redirect()->to('admin/category/'.$request->id)->with('message','Cập nhật thành công.');
		}
		return redirect()->to('admin/category/'.$request->id)->with(['message'=>'Có lỗi. Cập nhật thất bại','message_type'=>'danger']);
	}

	public function postDelete(){

		if(!$this->checkPermission('category/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=(int)\Input::get('data');

		if(Category::select('id')->where('parent',$id)->count()>0){
			return json_encode(["success"=>false,"message"=>"Loại sản phẩm này đã có loại con. Không thể xóa."]);
		}

		if(Category::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công loại sản phẩm {name}"]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa loại sản phẩm {name} thất bại"]);
	}

	public function show_home(){
		$id=(int)\Input::get('data');
		$show_home=\Input::get('ischeck');

		$show_home=($show_home=='true')?1:0;

		if(Category::where('id',$id)->update(['show_home'=>$show_home])){
			return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
		}

		return json_encode(["success"=>false,"message"=>"Thất bại"]);
	}

	public function display(){
		$id=(int)\Input::get('data');
		$display=\Input::get('ischeck');

		$display=($display=='true')?1:0;

		if(Category::where('id',$id)->update(['display'=>$display])){
			return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
		}

		return json_encode(["success"=>false,"message"=>"Thất bại"]);
	}

	public function sort(){
		$data=\Input::get('data');
		$column=\Input::get('column');
		foreach(\Input::get('id') as $key=>$value){
			Category::where('id',$value)->update([$column=>$data[$key]]);
		}

		return json_encode(["success"=>true]);
	}
}

?>