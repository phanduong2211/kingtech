@extends('backend.layout')
@section('title','Cấu hình website - ACP')

@section('breadcrumb')
<h2>Cấu hình website</h2>
@endsection


@section('content')


@include('backend._message')



<form method="post" id="frm" action="{{url('admin/setting/update')}}">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Hình nền:</label>
				</div>
				<div class="col-md-8 required boxupload">
					<div class="red">*</div>
					<img src="{{url($data['background_image'])}}" class="img-thumbnail showupload uploadimg" href="#imagechooseval" id="imgchoose" width="100px">
                        
                        <input type="hidden" class="form-control" value="{{$data['background_image']}}" name="background_image" id="imagechooseval" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Màu nền:</label>
				</div>
				<div class="col-md-8 required">
					<span class="red">*</span>
					<input type="color" name="background_color" style="height:100px;width:100px" value="{{$data['background_color']=='#fff'?'#ffffff':$data['background_color']}}" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
	</div>
	

	<div class="row margin">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Hình nền menu:</label>
				</div>
				<div class="col-md-8 required boxupload">
					<div class="red">*</div>
					<img src="{{url($data['background_menu'])}}" class="img-thumbnail showupload uploadimg" href="#imagechoosevalmenu" id="imgchoose" style="width:100px;height:50px">
                        
                        <input type="hidden" class="form-control" value="{{$data['background_menu']}}" name="background_menu" id="imagechoosevalmenu" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Màu nền menu:</label>
				</div>
				<div class="col-md-8 required">
					<span class="red">*</span>
					<input type="color" name="background_color_menu" style="height:50px;width:100px" value="{{$data['background_color_menu']}}" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		
	</div>

	<div class="row margin">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Màu menu hover:</label>
				</div>
				<div class="col-md-8 required">
					<span class="red">*</span>
					<input type="color" name="background_hover_menu" style="height:50px;width:100px" value="{{$data['background_hover_menu']}}" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Màu header:</label>
				</div>
				<div class="col-md-8 required">
					<span class="red">*</span>
					<input type="color" name="background_header" style="height:50px;width:100px" value="{{$data['background_header']}}" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		
	</div>

	<div class="row margin">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Màu header top:</label>
				</div>
				<div class="col-md-8 required">
					<span class="red">*</span>
					<input type="color" name="background_header_top" style="height:50px;width:100px" value="{{$data['background_header_top']}}" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		
	</div>

	<div class="row margin">
		
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Màu body:</label>
				</div>
				<div class="col-md-8 required">
					<span class="red">*</span>
					<input type="color" name="background_body" style="height:50px;width:100px" value="{{$data['background_body']=='#fff'?'#ffffff':$data['background_body']}}" />
					<span class="desc">.</span>
				</div>
			</div><br />
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label>Màu footer:</label>
				</div>
				<div class="col-md-8 required">
					<span class="red">*</span>
					<input type="color" name="background_footer" style="height:50px;width:100px" value="{{$data['background_footer']}}" />
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

@include('backend.upload')
<a class="nicupload showupload" href="#nicupload">Upload</a>

@endsection

@section('script')
<script src="{{Asset('public/js/validate.js')}}" ></script>
<script type="text/javascript" src="{{Asset('')}}public/js/dialog.js"></script>
<script type="text/javascript">
  var base_url_admin="{{url('admin')}}/";
    var asset_path="{{Asset('public')}}/";
    var __token="{{csrf_token()}}";
    var btnUpload=null;
     function callBackUpload(idobjclick,path){
            if(idobjclick=="#nicupload"){
                $("textarea"+btnUpload).parent().find(".nicEdit-main").append("<div class='postimg'><img src='"+asset_path+"images/"+path+"' /></div>");
                return false;
            }
            $(idobjclick).val(path);
            $(idobjclick).parents('.boxupload').eq(0).find("img").attr("src",asset_path+"images/"+path);
    
            
        }
    $(function(){

    
    $("#frm").kiemtra([
        {
          'name':'title',
          'trong':true
        },
            {
                'name':'image',
                'trong':true
            },
            {
                'name':'description',
                'trong':true
            },
            {
                'name':'cate_id',
                'select':true
            }
      ]);

        
  });
</script>

<script type="text/javascript" src="{{Asset('')}}public/js/jsupload.js"></script>


<script type="text/javascript">
  
  var currentPage = "#menu_info";
  var subPage="setting";


  $(document).ready(function(){
    

  });

  </script>
@endsection
