@extends('backend.layout')
@section('title','Thông tin website - ACP')

@section('breadcrumb')
<h2>Thông tin website</h2>
@endsection

@section('css')
  <link rel="stylesheet" type="text/css" href="{{Asset('public/css/t_table.css')}}" /> 
@endsection

@section('content')

<?php 
function showImage($path){
        if(strpos($path, "http")===0)
            return $path;
        return Asset('public/images/'.$path);
    }
 ?>

@include('backend._message')
<div>
<h4 style="margin-bottom:0px;padding-bottom:0px">Thông Tin Chung</h4>
	<hr style="margin-top:10px;padding-top:0px" />
<form method="post" id="frm-all" action="{{Asset('admin/info/postinfoall')}}">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Tiêu đề:</label>
				</div>
				<div class="col-md-8 required">
					<div class="red">*</div>
					<textarea rows="4" class="form-control" name="title">{{$data['title']}}</textarea>
					<span class="desc">Tên website</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Mô Tả:</label>
				</div>
				<div class="col-md-8">
					<textarea rows="4" class="form-control" name="meta_description">{{$data['meta_description']}}</textarea>
					<span class="desc">Dùng cho SEO</span>
				</div>
			</div><br />
		</div>
	</div>

	<div class="row margin">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Từ Khóa:</label>
				</div>
				<div class="col-md-8">
					<textarea rows="3" class="form-control" name="meta_keywords">{{$data['meta_keywords']}}</textarea>
					<span class="desc">Mỗi từ khóa cách nhau 1 dấu ','</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				
				<div class="col-md-4">
					<label>Copyright:</label>
				</div>
				<div class="col-md-8">
					<textarea rows="3" class="form-control" name="copyright">{{$data['copyright']}}</textarea>
					<span class="desc">Thông tin bản quyền</span>
				</div>
			</div><br />
		</div>
	</div>

	<div class="row margin">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Giấy phép:</label>
				</div>
				<div class="col-md-8">
					<textarea rows="3" class="form-control" name="giay_phep">{{$data['giay_phep']}}</textarea>
					<span class="desc">Thông tin giấy phép kinh doanh</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				
				<div class="col-md-4">
					<label>Địa chỉ:</label>
				</div>
				<div class="col-md-8">
					<textarea rows="3" class="form-control" name="address">{{$data['address']}}</textarea>
					<span class="desc">Địa chỉ website</span>
				</div>
			</div><br />
		</div>
	</div>

	


	<div class="row">
    		<div class="col-md-12 text-right">
    			<input type="submit" class="btn btn-success" value="Lưu Lại" />
    			<input type="button" class="btn btn-default" value="Nhập Lại" />
    		</div>
    	</div><br />
    	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
</form>
</div><!--//Thông Tin Chung-->


<div>
<h4 style="margin-bottom:0px;padding-bottom:0px">Thông Tin Liên Hệ</h4>
	<hr style="margin-top:10px;padding-top:0px" />
<form method="post" id="frm-contact" action="{{Asset('admin/info/contact')}}">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Hotline:</label>
				</div>
				<div class="col-md-8 required">
					<div class="red">*</div>
					<input type="text" class="form-control" name="hotline" value="{{$data['hotline']}}" />
					<span class="desc">Các số điện thoại nóng</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Số điện thoại:</label>
				</div>
				<div class="col-md-8 required">
					<span class="red">*</span>
					<input type="text" class="form-control" name="phone" value="{{$data['phone']}}" />
					<span class="desc">Số điện thoại chính của website</span>
				</div>
			</div><br />
		</div>
	</div>

	<div class="row margin">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Email:</label>
				</div>
				<div class="col-md-8 required">
					<div class="red">*</div>
					<input type="text" class="form-control" name="email" value="{{$data['email']}}" />
					<span class="desc">Email chính</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Facebook:</label>
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="facebook" value="{{$data['facebook']}}" />
					<span class="desc">Link facebook</span>
				</div>
			</div><br />
		</div>
	</div>

	<div class="row margin">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Skype:</label>
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="skype" value="{{$data['skype']}}" />
					<span class="desc">Link skype</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Google:</label>
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="google" value="{{$data['google']}}" />
					<span class="desc">Link google</span>
				</div>
			</div><br />
		</div>
	</div>
	


	<div class="row">
    		<div class="col-md-12 text-right">
    			<input type="submit" class="btn btn-success" value="Lưu Lại" />
    			<input type="button" class="btn btn-default" value="Nhập Lại" />
    		</div>
    	</div><br />
    	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
</form>
</div><!--//Thông Tin liên hệ-->



<div>
<h4 style="margin-bottom:0px;padding-bottom:0px">Thông Tin Mua/Bán Hàng</h4>
	<hr style="margin-top:10px;padding-top:0px" />
<form method="post" id="frm-banhang" action="{{Asset('admin/info/banhang')}}">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>SĐT mùa hàng từ xa:</label>
				</div>
				<div class="col-md-8 required">
					<div class="red">*</div>
					<input type="text" class="form-control" name="sdt_mua_hang_tu_xa" value="{{$data['sdt_mua_hang_tu_xa']}}" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>SĐT trung tâm bảo hành:</label>
				</div>
				<div class="col-md-8 required">
					<span class="red">*</span>
					<input type="text" class="form-control" name="sdt_trung_tam_bh" value="{{$data['sdt_trung_tam_bh']}}" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
	</div>

	<div class="row margin">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>SĐT đại lý:</label>
				</div>
				<div class="col-md-8 required">
					<div class="red">*</div>
					<input type="text" class="form-control" name="sdt_dai_ly" value="{{$data['sdt_dai_ly']}}" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		
	</div>

	<div class="row margin">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Giờ mở cửa:</label>
				</div>
				<div class="col-md-8 required">
					<div class="red">*</div>
					<textarea rows="4" class="form-control" name="open_time">{{$data['open_time']}}</textarea>
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Giờ bảo hành:</label>
				</div>
				<div class="col-md-8">
					<textarea rows="4" class="form-control" name="gio_bao_hanh">{{$data['gio_bao_hanh']}}</textarea>
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
	</div>
	


	<div class="row">
    		<div class="col-md-12 text-right">
    			<input type="submit" class="btn btn-success" value="Lưu Lại" />
    			<input type="button" class="btn btn-default" value="Nhập Lại" />
    		</div>
    	</div><br />
    	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
</form>
</div><!--//Thông Tin ban hang-->


<div>
<h4>
	Logo & Favicon
	 
</h4>
	<hr />
	
	<div class="row">
			<div class="col-md-6">
				<b>Logo</b><br /><br />
				<form method="post" action="<?php echo Asset('admin/info/changelogo') ?>" id="frmchangelogo" enctype="multipart/form-data">
				<label for="logo" class="uploadimg">
					<div>
						<img class="img-thumbnail" src="{{Asset('public/images/logo.png')}}" data-old="logo.png" />
					</div>
					<br />
					<input type="file" name="logo" class="hide" id="logo" />
					</label>
					<span class="desc">Kích thước chuẩn: 200x90</span>
					<input type="submit" class="btn btn-success btn-xs disabled" disabled="disabled" value="Lưu Lại" />
					<input type="reset"  disabled="disabled" class="btn btn-primary btn-xs disabled" value="Hủy Bỏ" />
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				</form>
			</div>
			<div class="col-md-6">
				<b>Favicon</b><br /><br />
				<form method="post" action="<?php echo Asset('admin/info/changefavicon') ?>"  enctype="multipart/form-data">
				<label for="favicon" class="uploadimg">
					<div>
						<img class="img-thumbnail" src="{{Asset('public/img/favicon.png')}}" data-old="favicon.png" />
					</div>
					<br />
					<input type="file" name="favicon" class="hide" id="favicon" />
					</label>
					<br /><br />
					<br /><br />
					<br />
					<span class="desc">Kích thước chuẩn: 16x16.</span>

					<input type="submit" class="btn btn-success btn-xs disabled" disabled="disabled" value="Lưu Lại" />
					<input type="reset"  disabled="disabled" class="btn btn-primary btn-xs disabled" value="Hủy Bỏ" />
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				</form>
			</div>
		</div>

</div><!--//Logo và favicon-->


@endsection
