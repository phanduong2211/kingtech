@extends('backend.layout')
@section('title','Sửa loại sản phẩm - ACP')

@section('breadcrumb')
<h2><a href="{{url('admin/category')}}">Loại sản phẩm</a></h2>
    <span>Cập nhật</span>
@endsection



@section('content')
  
  @include('backend._message')

    <form method="post" id="frm" action="{{url('admin/category/update')}}">
      <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <label>Tên:</label>
            </div>
            <div class="col-sm-8 required">
              <span class="red">*</span>
              <input type="text" name="name" id="namec" value="{{$data->name}}" class="form-control" />
              <span class="desc">
                Tên loại sản phẩm. Hiển thị trên web
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label>Url:</label>
              </div>
              <div class="col-sm-8 required">
                <span class="red">*</span>
                <input type="text" name="url" id="urlc" value="{{$data->url}}" class="form-control" />
                <span class="desc">
                  Url truy cập vào trang loại sản phẩm. Không dấu và mỗi từ cách nhau 1 dấu '-'. VD: camera-giam-sat
                </span>
              </div>
            </div>
        </div>
      </div><!--.row-->

      <div class="row margin">

        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label>Loại sản phẩm cha:</label>
              </div>
              <div class="col-sm-8 required">
                <span class="red">*</span>
                <select name="parent" class="form-control" id="parentId">
                  <option value="0">-- Không thuộc --</option>
                  
                        <?php 
                                function dequy($parentid,$arr,$text = ''){
                                    $temp=array();
                                    foreach ($arr as $key => $value) {
                                        if($value->parent==$parentid){
                                          $temp[]=$value;

                                          unset($arr[$key]);  
                                        }
                                    }

                                    if(count($temp)>0){
                                        foreach($temp as $item){
                                            ?>
                                            <option value="{{$item->id}}">{{$text.$item->name}}</option>
                                            <?php
                                            dequy($item->id,$arr,$text.'----');
                                        }
                                    }
                                }
                            dequy(0,$listCategory);
                            ?>

                </select>
                <span class="desc">
                  Loại sản phẩm này thuộc loại sản phẩm nào?
                </span>
              </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label for="show_home">Hiển thị trang chủ:</label>
              </div>
              <div class="col-sm-8">
                <input type="checkbox" id="show_home" name="show_home" />
              </div>
            </div>
        </div>
      </div><!--.row-->

      <div class="row margin">

        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label>Mô tả:</label>
              </div>
              <div class="col-sm-8">
                <textarea name="meta_description" rows="4" class="form-control">{{$data->meta_description}}</textarea>
                <span class="desc">
                  Mô tả về loại sản phẩm này. Dùng cho SEO
                </span>
              </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label>Từ khóa:</label>
              </div>
              <div class="col-sm-8">
                <textarea name="meta_keywords" rows="4" class="form-control">{{$data->meta_keywords}}</textarea>
          <span class="desc">
            Từ khóa tìm kiếm loại sản phẩm trên google. Dùng cho SEO
          </span>
              </div>
            </div>
        </div>

      </div><!--.row-->


       <div class="row margin">

        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label>Icon:</label>
              </div>
              <div class="col-sm-8">
                
                <label style="padding-right:15px">
                  <input type="radio" value="fa-square" name="icon" />
                  <i class="fa fa-square" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-desktop" name="icon" />
                  <i class="fa fa-desktop" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-laptop" name="icon" />
                  <i class="fa fa-laptop" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-mobile" name="icon" />
                  <i class="fa fa-mobile" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-video-camera" name="icon" />
                  <i class="fa fa-video-camera" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-truck" name="icon" />
                  <i class="fa fa-truck" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-camera-retro" name="icon" />
                  <i class="fa fa-camera-retro" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-book" name="icon" />
                  <i class="fa fa-book" style="font-size:15px"></i>
                </label>

                <label style="padding-right:15px">
                  <input type="radio" value="fa-tablet" name="icon" />
                  <i class="fa fa-tablet" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-bell-o" name="icon" />
                  <i class="fa fa-bell-o" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-beer" name="icon" />
                  <i class="fa fa-beer" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-cutlery" name="icon" />
                  <i class="fa fa-cutlery" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-lemon-o" name="icon" />
                  <i class="fa fa-lemon-o" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-microphone" name="icon" />
                  <i class="fa fa-microphone" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-phone" name="icon" />
                  <i class="fa fa-phone" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-th-large" name="icon" />
                  <i class="fa fa-th-large" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-save" name="icon" />
                  <i class="fa fa-save" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-android" name="icon" />
                  <i class="fa fa-android" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-apple" name="icon" />
                  <i class="fa fa-apple" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-windows" name="icon" />
                  <i class="fa fa-windows" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-tags" name="icon" />
                  <i class="fa fa-tags" style="font-size:15px"></i>
                </label>
                <label style="padding-right:15px">
                  <input type="radio" value="fa-shopping-cart" name="icon" />
                  <i class="fa fa-shopping-cart" style="font-size:15px"></i>
                </label>

                <label style="padding-right:15px">
                  <input type="radio" value="khac" id="iconkk" name="icon" />
                  <input type="text" class="disabled" placeholder="Icon Khác" disabled="disabled" name="iconkhac" style="width:80px" />
                  
                </label>
                <div id="ttttt" style='display:none'><b><a href="http://fontawesome.io/icons/" target="_black">Vào đây</a> chọn icon. Sau đó copy tên icon vào dán vào textbox</b></div>
                <span class="desc">
                  Icon hiển thị trên menu
                </span>
              </div>
            </div>
        </div>

        <?php 
function showImage($path){
        if(strpos($path, "http")===0)
            return $path;
        return Asset('public/images/'.$path);
    }
 ?>

        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label>Quảng cáo:</label>
              </div>
              <div class="col-sm-8 boxupload">
                <img src="{{$data->ads==''?Asset('public/images/uploadimg.png'):showImage($data->ads)}}" class="img-thumbnail showupload uploadimg" href="#imagechooseval" id="imgchoose" width="100px">
                        <br><div class="text-left desc">Copy url image từ nơi khác và paste vào textbox bên dưới<br>
                        <input type="text" class="form-control" value="{{$data->ads}}" name="ads" id="imagechooseval" />Hoặc upload ảnh khác. Kích thước chuẩn 270x169</div>
          <span class="desc">
            Hình ảnh quảng cáo hiển thị trên menu
          </span>
              </div>
            </div>
        </div>

      </div><!--.row-->

       <hr />
    <div class="row">
        <div class="col-sm-12 text-right">
            <input type="submit" value="Lưu lại" class="btn btn-success" />
            <input type="reset" value="Nhập lại" class="btn btn-default" />
        </div>
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input type="hidden" name="id" value="{{$data->id}}" />

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
</script>
<script type="text/javascript" src="{{Asset('')}}public/js/jsupload.js"></script>
<script type="text/javascript">
  
  var currentPage = "#menu_product";
  var subPage = 'category';

  var isShowHome="{{$data->show_home}}";
  var parentId="{{$data->parent}}";
  var iconId="{{$data->icon}}";


  $(document).ready(function(){
    if(isShowHome==='1'){
      $("#show_home").prop('checked',true);
    }
    $("#parentId").val(parentId);
    var flag=false;
    $("#frm input[name='icon']").each(function(){
      if(this.value==iconId){
        $(this).prop('checked',true);  
        flag=true;
        return false;
      }
    });

    if(!flag){
      $("#frm input[name='iconkhac']").removeClass('disabled').removeAttr('disabled').val(iconId);
      $("#iconkk").prop('checked',true);
      $('#ttttt').show();
    }

    var isCheckKhac=false;

    $("#frm input[name='icon']").change(function(){
      if(this.value=="khac"){
        $(this).parent().find("input[type='text']").removeClass('disabled').removeAttr('disabled').focus();
        $('#ttttt').show();
        isCheckKhac=true;
      }else{
        if(isCheckKhac){
          $(this).parent().find("input[type='text']").addClass('disabled').attr('disabled','disabled');
          $('#ttttt').hide();
          isCheckKhac=false;
        }
      }
    });

    $("#frm").kiemtra([
        {
          'name':'name',
          'trong':true
        },
        {
          'name':'url',
          'trong':true
        }
      ]);
    
  });

  </script>

@endsection