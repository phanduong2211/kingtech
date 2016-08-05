@foreach($website as $web)
@if($web->name=="background_header_top")
<?php $bgheadtop = $web->content; ?>
@endif
@endforeach
 <header class="hidden_mobile">
    <div id="header_top" style="background:{{$bgheadtop}}">
      <section>
        <div class="header_top">
          <div class="hotline">
            <figure class="overi_hotline"><img src="{{Asset('')}}public/kingtech/images/hotline.png" alt="Kingtech hotline"></figure>
            @foreach($website as $phone)
              @if($phone->name=="hotline")
                <span>{{$phone->content}}</span> </div>
              @endif
            @endforeach
          <div class="header_slogan up">
            @foreach($website as $slide)
              @if($slide->name=="slide_top")
                <p>{{$slide->content}}</p>
              @endif
            @endforeach
          </div>
          <div class="header_share">
          
              <div class="header_social">
              <figure class="_social">
              @foreach($website as $fb)
                @if($fb->name=="facebook")
                   <a href="{{$fb->content}}" target="_blank"><img src="{{Asset('')}}public/kingtech/images/icon_face.png" alt="Facebook"></a>
                @endif
                @if($fb->name=="twitter") 
                  <a href="{{$fb->content}}" target="_blank">
                  <img src="{{Asset('')}}public/kingtech/images/icon_twitter.png" alt="Gucci"></a>
                @endif 
              
                @if($fb->name=="google") 
                  <a href="{{$fb->content}}" target="_blank">
                  <img src="{{Asset('')}}public/kingtech/images/icon_google.png" alt="Google Plus"></a>
                @endif
              @endforeach
                 </figure>
              </div>            
          </div>
        </div>
      </section>
    </div>
  </header>
  <div class="show_mobile">
      <nav id="navbarmobile" class="navbar navbar-default" style="background-color:#EDEDED">
        
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url()}}">
              <img alt="kingtech" src="{{Asset('public/images/logo.jpg')}}" width="120px" height="25px" />
            </a>
          </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav clearfix">
              @foreach($categorys as $category)
                                @if($category->parent==0)
                  <a href="{{url('category/'.$category->id.'-'.$category->url)}}">{{$category->name}} </a>
                @endif
              @endforeach
              <a id="mgiasi" href="{{url('gia-si.html')}}">Xem giá sỉ</a>
            </ul>
          </div>
      </nav>
      <div id="seachmobile">
        <form method="get" action="{{url('tim-kiem.html')}}">
          <div class="clearfix">
            <input type="text" name="txtSearch" value="" placeholder="Tên sản phẩm, máy tính bảng, phụ kiện...">
            <i class="fa fa-search"></i>
          </div>
          <input type="hidden" name="ddStart" value="0" />
          <input type="hidden" name="ddEnd" value="0" />
        </form>
      </div>
  </div>