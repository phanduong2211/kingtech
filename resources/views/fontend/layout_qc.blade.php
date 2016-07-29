@extends('fontend.layout')

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