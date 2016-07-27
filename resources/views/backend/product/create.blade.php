@extends('backend.layout')
@section('title','Thêm sản phẩm - ACP')

@section('breadcrumb')
<h2><a href="{{url('admin/product')}}">Sản phẩm</a></h2>
    <span>Tạo mới</span>
@endsection

@section('css')
<style type="text/css">
  .itemimages{
    position: relative;
  }
  .itemimages .fa-times,.itemimages .fa-plus{
    position: absolute;
    top:0px;
    right:10px;
    font-size:20px;
    color:#a00;
    display: none;
  }
  .itemimages .fa-plus{
    right:40px;
    color:blue;
  }
  .itemimages:hover .fa-times,.itemimages:hover .fa-plus{
    display: block;
  }
  .itemimages .fa-times:hover,.itemimages .fa-plus:hover{
    cursor: pointer;
    color:red;
  }
</style>
@endsection


@section('content')
  
  @include('backend._message')

    <form method="post" action="" id="frm">
      <div class="row">

            <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-4">
                        <label>Mã sản phẩm:</label>
                    </div>
                    <div class="col-sm-8 required">
                        <span class="red">*</span>
                        <input name="pro_code" class="form-control" value="{{old('pro_code')}}" />
                      <span class="desc">VD: BM-800</span>
                    </div>
                    <div class="col-sm-4">
                        <label>Tên sản phẩm:</label>
                    </div>
                    <div class="col-sm-8 required">
                        <span class="red">*</span>
                        <textarea name="name" rows="2" id="namec" class="form-control">{{old('name')}}</textarea>
                    </div>
                    
                </div><br />
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-md-4">
                        <label>Url:</label>
                    </div>
                    <div class="col-md-8 required">
                        <span class="red">*</span>
                        <textarea name="url" rows="2" id="urlc" class="form-control">{{old('url')}}</textarea>
                        <span class="desc">
                          Không dấu và mỗi từ cách nhau 1 dấu '-'. VD: gioi-thieu
                        </span>
                    </div>
                    <div class="col-md-4">
                        <label>Loại:</label>
                    </div>
                    <div class="col-md-8 required">
                        <span class="red">*</span>
                        <select name="cate_id" class="form-control">
                  <option value="-1">-- Chọn loại sản phẩm --</option>
                  
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
                            dequy(0,$data);
                            ?>

                </select>
                    </div>
                </div><br />
            </div>
        </div><br />


        <div class="row margin">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <label>Giá:</label>
            </div>
            <div class="col-sm-8 required">
              <span class="red">*</span>
              <input type="text" name="price" value="{{old('price')}}" class="form-control" />
              <span class="desc">
                Giá hiện tại của sản phẩm. VD: 1.000.000 hoặc 1,000,000
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label>Giá công ty:</label>
              </div>
              <div class="col-sm-8 required">
                <span class="red">*</span>
                <input type="text" name="price_company" value="{{old('price_company')}}" class="form-control" />
                <span class="desc">
                  .
                </span>
              </div>
            </div>
        </div>
      </div><!--.row-->

      <div class="row margin">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <label>Giá sỉ:</label>
            </div>
            <div class="col-sm-8 required">
              <span class="red">*</span>
              <input type="text" name="price_origin" value="{{old('price_origin')}}" class="form-control" />
              <span class="desc">
                Giá nhập
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label>Trạng thái:</label>
              </div>
              <div class="col-sm-8 required">
                <span class="red">*</span>
                <select name="status" class="form-control">
                  <option value="-1">--Lựa chọn--</option>
                  @foreach(\App\Product::getStatus() as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                  @endforeach
                </select>
                <span class="desc">
                  .
                </span>
              </div>
            </div>
        </div>
      </div><!--.row-->

        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <label>Hình Ảnh:</label>
                    </div>
                    <div class="col-md-8 required boxupload">
                        <span class="red">*</span>
                        <img src="{{Asset('public/images/uploadimg.png')}}" class="img-thumbnail showupload uploadimg" href="#imagechooseval" id="imgchoose" width="100px">
                        <br><div class="text-left desc">Copy url image từ nơi khác và paste vào textbox bên dưới<br>
                        <input type="text" class="form-control " name="image" id="imagechooseval" value="{{old('image')}}" />Hoặc upload ảnh khác. Kích thước chuẩn 270x169</div>
                    </div>
                </div><br />
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <label>Tính năng nổi bật:</label>
                    </div>
                    <div class="col-md-8">
                       <textarea rows="3" name="description" class="form-control">{{old('description')}}</textarea>
                        <span class="desc">Giới thiệu các tính năng nổi bật của sản phẩm. Khoảng 200 ký tự</span>
                    </div>
                    <div class="col-md-4">
                        <label>Từ khóa:</label>
                    </div>
                    <div class="col-md-8">
                       <textarea rows="2" name="keywords" class="form-control">{{old('keywords')}}</textarea>
                        <span class="desc">Từ khóa tìm kiếm sản phẩm, dùng cho SEO</span>
                    </div>
                </div><br />
            </div>
        </div><br />

        <div class="row margin">
            <div class="col-md-12">
                <div class="row" id='imagekhac'>
                    <div class="col-md-2">
                        <label>Hình ảnh khác:</label>
                    </div>
                    <div class="col-md-10">
                      <div class="row">
                          <div class='col-xs-6 col-sm-4 col-md-4 itemimages'>
                            <img src="{{Asset('public/images/uploadimg.png')}}" class="img-thumbnail showupload uploadimg" href="#imageschooseval" id="imgchoose" width="100px">
                            <br><div class="text-left desc">Copy url image từ nơi khác và paste vào textbox bên dưới<br>
                            <input type="text" class="form-control " name="images[]" id="imageschooseval" />Hoặc upload ảnh khác. Kích thước chuẩn 270x169</div>
                            <i class="fa fa-times" title="xóa"></i>
                            <i class="fa fa-plus" title="Thêm"></i>
                          </div>
                          
                      </div>
                      <span class="desc">các hình ảnh khác của sản phẩm</span>
                    </div>
                </div><br />
            </div>
        </div>

        <div class="row margin">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <label>Số lượng:</label>
            </div>
            <div class="col-sm-8 required">
              <span class="red">*</span>
              <input type="text" name="quantity" value="{{old('quantity')}}" class="form-control" />
              <span class="desc">
                Số lượng sản phẩm hiện có
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-4">
                <label>Hiện thị trang chủ:</label>
              </div>
              <div class="col-sm-8">
                <input type='checkbox' name="show_home" checked="checked" />
                <span class="desc">
                  Có hiện thị sản phẩm này ngoài trang chủ không?
                </span>
              </div>
            </div>
        </div>
      </div><!--.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <label>Tổng quan:</label>
                    </div>
                    <div class="col-md-10">
                        <textarea style="width:100%;height:250px" name="overview" id="overview">{{old('overview')}}</textarea>
                      <span class="desc">Bài viết đánh giá tổng quan về sản phẩm</span>
                    </div>
                </div><br />
            </div>
        </div><br />

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <label>Thông số kỹ thuật:</label>
                    </div>
                    <div class="col-md-10">
                        <textarea style="width:100%;height:250px" name="specs" id="specs">{{old('specs')}}</textarea>
                      <span class="desc">.</span>
                    </div>
                </div><br />
            </div>
        </div><br />

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <label>Khui hộp:</label>
                    </div>
                    <div class="col-md-10">
                        <textarea style="width:100%;height:250px" name="accessories" id="accessories">{{old('accessories')}}</textarea>
                      <span class="desc">.</span>
                    </div>
                </div><br />
            </div>
        </div><br />

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <label>Khuyến mãi:</label>
                    </div>
                    <div class="col-md-10">
                        <textarea style="width:100%;height:250px" name="promotion" id="promotion">{{old('promotion')}}</textarea>
                      <span class="desc">.</span>
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
    var slImages=0;
    function callBackUpload(idobjclick,path){
        if(idobjclick=="#nicupload"){
            $("textarea"+btnUpload).parent().find(".nicEdit-main").append("<div class='postimg'><img src='"+asset_path+"images/"+path+"' /></div>");
            return false;
        }
        if(idobjclick=="#imagechooseval"){
           $(idobjclick).val(path).parent().parent().find("img").attr("src",asset_path+"images/"+path);
           $("#frm input[name='image']").removeClass("error").next(".errortext").hide();
       }else{

        if(idobjclick.indexOf('#imageschooseval')===0 || idobjclick.indexOf('#imagesschooseval')===0){
            var oo=$(idobjclick).val(path).parent().parent();
            oo.find("img").attr("src",asset_path+"images/"+path);
            slImages++;
            oo.parent().append('<div class="col-xs-6 col-sm-4 col-md-4 itemimages">'+
                            '<img src="'+asset_path+'images/uploadimg.png" class="img-thumbnail showupload uploadimg" href="#imageschooseval'+(slImages)+'" id="imgchoose" width="100px">'+
                            '<br><div class="text-left desc">Copy url image từ nơi khác và paste vào textbox bên dưới<br>'+
                            '<input type="text" class="form-control " name="images[]" id="imageschooseval'+slImages+'" />Hoặc upload ảnh khác. Kích thước chuẩn 270x169</div><i class="fa fa-times" title="xóa"></i><i class="fa fa-plus" title="thêm"></i></div>');
        }else{
           $(idobjclick).val(path);
       }
   }
}
    $(function(){
    
    $("#imagekhac").on('click','.fa-times',function(){
      if($(".itemimages").size()>1){
        $(this).parent().remove();
      }else{
        $(this).parent().find("img").attr('src',asset_path+'images/uploadimg.png');
        $(this).parent().find(".form-control").val('');
      }
    });

    $("#imagekhac").on('click','.fa-plus',function(){
      slImages++;
      $("#imagekhac .row").append('<div class="col-xs-6 col-sm-4 col-md-4 itemimages">'+
                            '<img src="'+asset_path+'images/uploadimg.png" class="img-thumbnail showupload uploadimg" href="#imageschooseval'+(slImages)+'" id="imgchoose" width="100px">'+
                            '<br><div class="text-left desc">Copy url image từ nơi khác và paste vào textbox bên dưới<br>'+
                            '<input type="text" class="form-control " name="images[]" id="imageschooseval'+slImages+'" />Hoặc upload ảnh khác. Kích thước chuẩn 270x169</div><i class="fa fa-times" title="xóa"></i><i class="fa fa-plus" title="thêm"></i></div>');
    });

    $("#frm").kiemtra([
            {
                'name':'pro_code',
                'trong':true
            },
            {
                'name':'name',
                'trong':true
            },
            {
                'name':'cate_id',
                'select':true
            }
            ,
            {
                'name':'price',
                'gia':true
            },
            {
                'name':'price_origin',
                'gia':true
            },
            {
                'name':'price_company',
                'gia':true
            },
            {
                'name':'status',
                'select':true
            },
            {
                'name':'image',
                'trong':true
            }
            ,
            {
                'name':'quantity',
                'so':true
            }
      ]);

        $("#valiapp").show().find("input[type='submit']").removeAttr("disabled");
  });
</script>

<script type="text/javascript" src="{{Asset('')}}public/js/jsupload.js"></script>
<script type="text/javascript" src="<?php echo Asset('public/js/nicEdit.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        new nicEditor({ fullPanel: true }).panelInstance("overview");

        new nicEditor({ fullPanel: true }).panelInstance("specs");

        new nicEditor({ fullPanel: true }).panelInstance("accessories");

        new nicEditor({ fullPanel: true }).panelInstance("promotion");
    });
</script>

<script type="text/javascript">
  
  var currentPage = "#menu_product";
  var subPage="new";

  function change_alias(alias)
  {
      var str = alias;
      str= str.toLowerCase(); 
      str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
      str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
      str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
      str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
      str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
      str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
      str= str.replace(/đ/g,"d"); 
      str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
      /* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */
      str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
      str= str.replace(/^\-+|\-+$/g,""); 
      //cắt bỏ ký tự - ở đầu và cuối chuỗi 
      return str;
  }

  $(document).ready(function(){
    var urlc=$("#urlc");
    var isChange=true;
    $("#namec").on('keyup',function(){
      if(isChange){
        urlc.val(change_alias($.trim($(this).val())));
      }else{
        $(this).off('keyup');
      }
    });
    urlc.on('keyup',function(){
      isChange=false;
      $(this).off('keyup');
    });
  

  });

  </script>

@endsection