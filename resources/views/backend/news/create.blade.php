@extends('backend.layout')
@section('title','Thêm loại tin tức - ACP')

@section('breadcrumb')
<h2><a href="{{url('admin/news-category')}}">Loại tin tức</a></h2>
    <span>Tạo mới</span>
@endsection



@section('content')
  
  @include('backend._message')

    <form method="post" action="" id="frm">
      <div class="row">

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <label>Tiêu Đề:</label>
                    </div>
                    <div class="col-md-10 required">
                        <span class="red">*</span>
                        <textarea name="title" class="form-control">{{old('title')}}</textarea>
                    </div>
                </div><br />
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <label>Loại:</label>
                    </div>
                    <div class="col-md-10 required">
                        <span class="red">*</span>
                        <select name="cate_id" class="form-control">
                            <option value="-1">-- Chọn Loại --</option>
                            @foreach($data as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div><br />
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <label>Hình Ảnh:</label>
                    </div>
                    <div class="col-md-10 required boxupload">
                        <span class="red">*</span>
                        <img src="{{Asset('public/images/uploadimg.png')}}" class="img-thumbnail showupload uploadimg" href="#imagechooseval" id="imgchoose" width="100px">
                        <br><div class="text-left desc">Copy url image từ nơi khác và paste vào textbox bên dưới<br>
                        <input type="text" class="form-control " name="image" id="imagechooseval" />Hoặc upload ảnh khác. Kích thước chuẩn 270x169</div>
                    </div>
                </div><br />
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <label>Mô Tả:</label>
                    </div>
                    <div class="col-md-10 required">
                        <span class="red">*</span>
                       <textarea rows="3" name="description" class="form-control">{{old('description')}}</textarea>
                        <span class="desc">Mổ tả ngắn gọn về tin tức. Khoảng 200 ký tự</span>
                    </div>
                    <div class="col-md-2">
                        <label>Từ khóa:</label>
                    </div>
                    <div class="col-md-10">
                       <textarea rows="2" name="keywords" class="form-control">{{old('keywords')}}</textarea>
                        <span class="desc">Từ khóa tìm kiếm tin tức, dùng cho SEO</span>
                    </div>
                </div><br />
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1">
                        <label>Nội Dung:</label>
                    </div>
                    <div class="col-md-11">
                        <textarea style="width:100%;height:250px" name="content" id="content">{{old('content')}}</textarea>
                    </div>
                </div><br />
            </div>
        </div><br />
      <div class="row">
        <div class="col-md-12 text-right" id="valiapp">
          <input type="submit" class="btn btn-success" disabled="disabled" value="Lưu Lại" />
          <input type="reset" class="btn btn-default" value="Nhập Lại" />
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
            $(".boxupload img").attr("src",asset_path+"images/"+path);
    
            $("#frm input[name='image']").removeClass("error").next(".errortext").hide();
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

        $("#valiapp").show().find("input[type='submit']").removeAttr("disabled");
  });
</script>

<script type="text/javascript" src="{{Asset('')}}public/js/jsupload.js"></script>
<script type="text/javascript" src="<?php echo Asset('public/js/nicEdit.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        new nicEditor({ fullPanel: true }).panelInstance("content");
    });
</script>

<script type="text/javascript">
  
  var currentPage = "#menu_news";
  var subPage="category";


  $(document).ready(function(){
    

  });

  </script>

@endsection