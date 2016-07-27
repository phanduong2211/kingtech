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
		foreach($request->images as $item){
			if($item!=""){
				$images.=$item.",";
			}
		}
		if($images!=""){
			$images=substr($images, 0,strlen($images)-1);
		}

		$product->images=$images;


		if($product->save()){
			return redirect()->to('admin/product/create')->with('message','Thêm thành công.');
		}
		return redirect()->to('admin/product/create')->with(['message'=>'Có lỗi. Thêm thất bại','message_type'=>'danger']);
	}

	public function update($id){

		if(!$this->checkPermission('news/update')){
			return $this->ErrorPermission('Sửa tin tức');
		}

		$data=array();
		$data['data']=News::find((int)$id);
		if($data['data']==null)
			return redirect()->to('admin/news')->with(['message'=>'Tin tức không tồn tại.','message_type'=>'danger']);
		$data['listNewsCate']=NewsCate::select('id','name')->get();
		return view('backend.news.update',$data);
	}

	public function postUpdate(NewsRequest $request){

		if(!$this->checkPermission('news/update')){
			return $this->ErrorPermission('Sửa tin tức');
		}

		$news=News::find((int)$request->id);
		if($news==null)
			return redirect()->to('admin/news')->with(['message'=>'Tin tức không tồn tại.','message_type'=>'danger']);
		
		$news->title=str_replace("\"", "'", trim($request->title));

		$news->url=$this->formatToUrl(trim($request->title));
		if(News::select('id')->where('id','<>',(int)$request->id)->where('url',$news->url)->count()>0){
			return redirect()->to('admin/news/'.$request->id)->with(['message'=>'Tin tức đã tồn tại.','message_type'=>'danger'])->withInput($request->all());
		}

		$news->cate_id=(int)$request->cate_id;
		$news->image=$request->image;
		$news->description=str_replace("\"", "'", trim($request->description));
		$news->keywords=str_replace("\"", "'", trim($request->keywords));
		$news->content=$request->content;
		
		if($news->save()){
			return redirect()->to('admin/news/'.$request->id)->with('message','Cập nhật thành công.');
		}
		return redirect()->to('admin/news/'.$request->id)->with(['message'=>'Có lỗi. Cập nhật thất bại','message_type'=>'danger']);
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