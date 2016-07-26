@extends('fontend.layout')
@section('title')
<title>kingtech | android tv box | loa bluetooth| camera the thao | but trinh chieu| ong nhom | camera hanh trinh | tai nghe bluetooth </title>
@endsection
@section('meta')
<meta name='description' content='KINGTECH chuyên phân phối android tv box | loa bluetooth| camera the thao | but trinh chieu| ong nhom | camera hanh trinh | tai nghe bluetooth giá tốt nhất ' >
  <meta name='keywords' content='kingtech | android tv box | loa bluetooth| camera the thao | but trinh chieu| ong nhom | camera hanh trinh | tai nghe bluetooth | Pin du phong | bo phat wifi' >
  
  <meta property="og:type" content="website" />
  <meta property="og:url" content="/" />
  <meta property="og:title" content="KINGTECH chuyên phân phối android tv box, loa bluetooth, camera the thao" />
  <meta property="og:description" content="KINGTECH chuyên phân phối android tv box | loa bluetooth| camera the thao | but trinh chieu| ong nhom | camera hanh trinh | tai nghe bluetooth giá tốt nhất " />
  <meta property="og:site_name" content="kingtech" />
  <meta property="og:image" content="images/logo_jpg.jpg" />
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
      <div class="body_pages">
        <link rel="stylesheet" href="public/kingtech/css/TweenMax.css" type="text/css">

@include("fontend.home.slide")
<div class="box_tieudem">
  <div class="box_tieudem_title">
    <aside> <strong>Tiêu điểm:</strong>
      <ul class="flv_tieudiem" id="nt-title" style="height: 30px; overflow: hidden;">
                @for($i=0;$i< count($newsHot);$i++)
                  @for($j=0;$j < count($NewsCate);$j++)
                    @if($newsHot[$i]->cate_id==$NewsCate[$j]->id)
                    <li style="margin-top: 0px;"><a href="{{Asset('')}}tin-tuc/{{$NewsCate[$j]->url}}/{{$newsHot[$i]->url}}" title="{{$newsHot[$i]->title}}">{{$newsHot[$i]->title}}</a></li>
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

                var nt_title = $('#nt-title').newsTicker({

                row_height: 30,

                max_rows: 1,

                duration: 3000,

                pauseOnHover: 0

            });

        </script>
      </div>
@endsection