<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use App\Category;
use App\Http\Requests\ProductRequest;


class ProductController extends BaseController
{
	public function index()
	{
		if(!$this->checkPermission('product/list')){
			return $this->ErrorPermission('Sản phẩm');
		}

		$data=Product::orderBy('id','desc')->get();

		$listCategory=Category::select('id','name')->get();
		
		return view("backend.product.index",array('data'=>$data,'listCategory'=>$listCategory));
	}


	public function create(){
		if(!$this->checkPermission('product/create')){
			return $this->ErrorPermission('Thêm sản phẩm');
		}

		$data=Category::select('id','name','parent')->get();

		return view("backend.product.create",array('data'=>$data));
	}

	public function postCreate(ProductRequest $request){

		if(!$this->checkPermission('product/create')){
			return $this->ErrorPermission('Thêm sản phẩm');
		}

		$product=new Product();

		$product->name=str_replace("\"", "'", trim($request->name));

		$product->url=$this->formatToUrl(trim($request->url));
		if(Product::select('id')->where('url',$product->url)->count()>0){
			return redirect()->to('admin/product/create')->with(['message'=>'Url đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		$product->pro_code=trim($request->pro_code);
		$product->cate_id=$request->cate_id;

		$product->image=trim($request->image);

		$product->description=str_replace("\"", "'", trim($request->description));
		$product->description=str_replace("\n", "<br>",$product->description);
		$product->keywords=str_replace("\"", "'", trim($request->keywords));
		
		$product->price=preg_replace("/(\.|-| |\,)*/", "", trim($request->price));

		$product->price_company=preg_replace("/(\.|-| |\,)*/", "", trim($request->price_company));

		$product->price_origin=preg_replace("/(\.|-| |\,)*/", "", trim($request->price_origin));

		$product->status=$request->status;
		$product->quantity=$request->quantity;
		$product->viewer=0;
		$product->sold=0;
		$product->display=1;
		$product->index_home=0;

		$product->overview=$request->overview;
		$product->specs=$request->specs;
		$product->accessories=$request->accessories;
		$product->promotion=$request->promotion;

		$product->show_home=($request->show_home=='on')?1:0;
		$images="";
		if($request->images!=null){
			foreach($request->images as $item){
				if($item!=""){
					$images.=$item.",";
				}
			}
			if($images!=""){
				$images=substr($images, 0,strlen($images)-1);
			}
		}

		$product->images=$images;


		if($product->save()){
			return redirect()->to('admin/product/create')->with('message','Thêm thành công.');
		}
		return redirect()->to('admin/product/create')->with(['message'=>'Có lỗi. Thêm thất bại','message_type'=>'danger']);
	}

	public function update($id){

		if(!$this->checkPermission('product/update')){
			return $this->ErrorPermission('Sửa sản phẩm');
		}

		$data=array();
		$data['data']=Product::find((int)$id);
		if($data['data']==null)
			return redirect()->to('admin/product')->with(['message'=>'Sản phẩm không tồn tại.','message_type'=>'danger']);
		$data['listCategory']=Category::select('id','name','parent')->get();
		return view('backend.product.update',$data);
	}

	public function postUpdate(ProductRequest $request){

		if(!$this->checkPermission('product/update')){
			return $this->ErrorPermission('Sửa sản phẩm');
		}

		$product=Product::find((int)$request->id);
		if($product==null)
			return redirect()->to('admin/product')->with(['message'=>'Sản phẩm không tồn tại.','message_type'=>'danger']);
		
		$product->name=str_replace("\"", "'", trim($request->name));

		$product->url=$this->formatToUrl(trim($request->url));
		if(Product::select('id')->where('id','<>',(int)$request->id)->where('url',$product->url)->count()>0){
			return redirect()->to('admin/product/'.$request->id)->with(['message'=>'Url đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		$product->pro_code=trim($request->pro_code);
		$product->cate_id=$request->cate_id;

		$product->image=trim($request->image);

		$product->description=str_replace("\"", "'", trim($request->description));
		$product->description=str_replace("\n", "<br>",$product->description);
		$product->keywords=str_replace("\"", "'", trim($request->keywords));
		
		$product->price=preg_replace("/(\.|-| |\,)*/", "", trim($request->price));

		$product->price_company=preg_replace("/(\.|-| |\,)*/", "", trim($request->price_company));

		$product->price_origin=preg_replace("/(\.|-| |\,)*/", "", trim($request->price_origin));

		$product->status=$request->status;
		$product->quantity=$request->quantity;

		$product->overview=$request->overview;
		$product->specs=$request->specs;
		$product->accessories=$request->accessories;
		$product->promotion=$request->promotion;

		$product->show_home=($request->show_home=='on')?1:0;
		$images="";
		if($request->images!=null){
			foreach($request->images as $item){
				if($item!=""){
					$images.=$item.",";
				}
			}
			if($images!=""){
				$images=substr($images, 0,strlen($images)-1);
			}
		}

		$product->images=$images;
		
		if($product->save()){
			return redirect()->to('admin/product/'.$request->id)->with('message','Cập nhật thành công.');
		}
		return redirect()->to('admin/product/'.$request->id)->with(['message'=>'Có lỗi. Cập nhật thất bại','message_type'=>'danger']);
	}

	public function postDelete(){

		if(!$this->checkPermission('product/delete')){
			return json_encode(["success"=>false,"message"=>"Bạn không có quyền xóa"]);
		}

		$id=(int)\Input::get('data');

		if(Product::destroy($id)){
			return json_encode(["success"=>true,"message"=>"Xóa thành công sản phẩm {name}"]);
		}
		return json_encode(["success"=>false,"message"=>"Xóa sản phẩm {name} thất bại"]);
	}

	public function display(){
		$id=(int)\Input::get('data');
		$display=\Input::get('ischeck');

		$display=($display=='true')?1:0;

		if(Product::where('id',$id)->update(['display'=>$display])){
			return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
		}

		return json_encode(["success"=>false,"message"=>"Thất bại"]);
	}

	public function show_home(){
		$id=(int)\Input::get('data');
		$show_home=\Input::get('ischeck');

		$show_home=($show_home=='true')?1:0;

		if(Product::where('id',$id)->update(['show_home'=>$show_home])){
			return json_encode(["success"=>true,"message"=>"Cập nhật thành công"]);
		}

		return json_encode(["success"=>false,"message"=>"Thất bại"]);
	}

	public function sort(){
		$data=\Input::get('data');
		foreach(\Input::get('id') as $key=>$value){
			Product::where('id',$value)->update(['index_home'=>$data[$key]]);
		}

		return json_encode(["success"=>true]);
	}
}

?>