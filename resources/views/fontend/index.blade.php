@extends('fontend.layout')
@section('title')
<title>
  @foreach($website as $tile)
    @if($tile->name=="title")
      <?php echo $tile->content; ?>
    @elseif($tile->name=="background_body")
      <?php $bgbody = $tile->content; ?>
    @endif

  @endforeach
</title>
@endsection

@section("description")
<meta name='description' content='
@foreach($website as $tile)
    @if($tile->name=="meta_description")
      <?php echo $tile->content; ?>
    @endif
  @endforeach'>
  @endsection

@section("keywords")
  <meta name='keywords' content='
@foreach($website as $tile)
    @if($tile->name=="meta_keywords")
      <?php echo $tile->content; ?>
    @endif
  @endforeach
  ' >
    @endsection
    @section('meta')
  <meta property="og:type" content="website" />
  <meta property="og:url" content="/" />
  <meta property="og:title" content="KINGTECH chuyên phân phối android tv box, loa bluetooth, camera the thao" />
  <meta property="og:description" content="KINGTECH chuyên phân phối android tv box | loa bluetooth| camera the thao | but trinh chieu| ong nhom | camera hanh trinh | tai nghe bluetooth giá tốt nhất " />
  <meta property="og:site_name" content="kingtech" />
  <meta property="og:image" content="images/logo-hao-huan.png" />
  <meta property="fb:app_id" content="1700293566862288" />
  <meta name='robots' content='INDEX,FOLLOW' />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>  
  <meta name='Search Engines' content='www.google.com, www.google.com.vn, www.yahoo.com' />
@endsection
<style type="text/css">
  ._social
  {
    margin-top:-1px !important;
  }
  .overi_hotline
    {
      margin-top: 13px;
    }
</style>
@section('center')
      <div class="body_pages" style="background:{{$bgbody}}">
        <link rel="stylesheet" href="public/kingtech/css/TweenMax.css" type="text/css">

@include("fontend.home.slide")
<div class="box_tieudem">
  <div class="box_tieudem_title">
    <aside> <strong>Tiêu điểm:</strong>
      <ul class="flv_tieudiem" id="nt-title" style="height: 30px; overflow: hidden;">
                @for($i=0;$i< count($newsHot);$i++)
                  @for($j=0;$j < count($NewsCate);$j++)
                    @if($newsHot[$i]->cate_id==$NewsCate[$j]->id)
                    <li style="margin-top: 0px;"><a href="{{Asset('')}}tin-tuc/{{$NewsCate[$j]->url}}/{{$newsHot[$i]->id.'-'.$newsHot[$i]->url}}" title="{{$newsHot[$i]->title}}">{{$newsHot[$i]->title}}</a></li>
                    @endif
                  @endfor
                @endfor
              </ul>
    </aside>
      @for($i=0;$i< count($news_cate);$i++)        

        @if($i==0)
        <span class="tieude_khuyenmai"><a href="{{Asset('')}}tin-tuc/{{$news_cate[$i]->url}}" title="{{$news_cate[$i]->name}}">{{$news_cate[$i]->name}}</a></span>        
        @elseif($i==1)
        <span class="tieude_thuthuat"><a href="{{Asset('')}}tin-tuc/{{$news_cate[$i]->url}}" title="{{$news_cate[$i]->name}}">{{$news_cate[$i]->name}}</a></span>
        @elseif($i==2)
        <span class="tieude_tinmoi"><a href="{{Asset('')}}tin-tuc/{{$news_cate[$i]->url}}" title="{{$news_cate[$i]->name}}">{{$news_cate[$i]->name}}</a></span>
        @endif
      @endfor
      </div>
  <div class="slider_item">
  @include("fontend.news.newsindex")
      </div>
</div>
@include("fontend.home.search")
<div class="box_pages fl_padding2">
  @include("fontend.home.adsLeft")
  <div class="box_pages_center">
    @include("fontend.home.newproduct")
    @include("fontend.home.productcategory")
  </div>
      @include("fontend.home.centerSupport")
</div>
<script src="public/kingtech/js/jquery.newsTicker.js"></script> 
<script>
var adscenter="{{$adscenter==null?"":$convert->showImage($adscenter->image)}}";
var urladscenter="{{$adscenter->url}}";

                var nt_title = $('#nt-title').newsTicker({

                row_height: 30,

                max_rows: 1,

                duration: 3000,

                pauseOnHover: 0

            });

                $(document).ready(function(){
                  $(window).load(function(){
                      if(adscenter!=""){
                        $("body").append('<div id="boardmodaladscenter"></div><div id="modaladscenter">'+
                          '<div id="ctmodaladscenter"><a href="'+urladscenter+'"><img src="'+adscenter+'" width="600px" height="400px" style="display:block;border-radius:3px" /></a><i>&times;</i></div>'+
                          '</div>');

                        $("#boardmodaladscenter").click(function(){
                          $(this).fadeOut();
                          $("#modaladscenter").fadeOut();
                        });

                        $("#ctmodaladscenter i").click(function(){
                          $("#boardmodaladscenter").fadeOut();
                          $("#modaladscenter").fadeOut();
                        });
                      }
                  });
                });

        </script>
      </div>

      <style type="text/css">
      #boardmodaladscenter{
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0px;
        left: 0px;
        z-index: 1000;
        background-color: rgba(0,0,0,0.5);

      }
      #modaladscenter{
        position: fixed;
        top: 10%;
        z-index: 1001;
        box-shadow: 0px 0px 5px #ccc;
        border-radius: 3px;
        width: 600px;
        height: 400px;
        background-color: white;
        left: 30%;
      }
      #modaladscenter #ctmodaladscenter{
        position: relative;
      }

      #modaladscenter #ctmodaladscenter i{
         position: absolute;
          top: -15px;
        right: 2px;
        font-size: 40px;
        color: #ccc;
      }
      #modaladscenter #ctmodaladscenter i:hover{
        color:#333;
        cursor: pointer;
      }
      </style>
@endsection