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
<head>
  <style>
  .pagination
  {
    margin:auto;
    width:24%;
  }
    .pagination li
    {
      float:left;
      list-style: none;
      width:5px;
      height: 5px;
      padding:12px;
      border:1px solid gray;
      box-shadow: 5px 5px 16px -5px;
    }
    
    .overi_hotline
    {
      margin-top: 13px;
    }
  ._social
  {
    margin-top:-1px !important;
  }
  .overi_hotline
    {
      margin-top: 13px;
    }
    .search_line
    {
      margin-top:-10px;
    }
  </style>
</head>
@section('center')
      <div class="body_pages">
        <link rel="stylesheet" href="{{Asset('')}}public/kingtech/css/TweenMax.css" type="text/css">



@include("fontend.home.search")
<div class="box_pages fl_padding2">
  @include("fontend.home.adsLeft")
  <div class="box_pages_center">
      @yield("box_center")     
  </div>
      @include("fontend.home.centerSupport")
</div>
<script src="{{Asset('')}}public/kingtech/js/jquery.newsTicker.js"></script> 
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