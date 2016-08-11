
@extends('fontend.layout_qc')
@section("title")
@if(count($products)>0)
<title>{{$products[0]->name}}</title>
@else
          <title>Không tim thấy - kingtech.com.vn</title>
@endif
@endsection
@if(count($products)>0)
@section("description")
<meta name='description' content='
{{$products[0]->description}}'>
  @endsection
@section("keywords")

<meta name='keywords' content='
{{$products[0]->keywords}}
  ' >
@endif
@endsection
@section('box_center')
@if(count($products)>0)
            <div class="box_sales">
              <div class="box_title">
                <aside>
                  <label>{{$products[0]->name}}</label>
                  <span></span> </aside>
              </div>
              <div class="box_prodetails">
                <aside>
                  <div class="aside_left">
                    <div class="aside_img">
                      <figure>
                          <img src="{{$convert->showImage($products[0]->image)}}" alt="{{$products[0]->name}}" /> 
                       <a class="group1"  href="{{$convert->showImage($products[0]->image)}}" title="{{$products[0]->name}}" >
                          <code> <i class="fa fa-search-plus"></i> Xem ảnh</code>
                      </a>
                      <big>
                      <?php $images =  explode(",",trim($products[0]->images));?>
                      @if(count($images)>0)
                      @foreach($images as $img)
                        @if($img!="")
                        <a class="group1"  href="{{Asset('')}}public/kingtech/upload/hinhanh/{{$img}}" title="{{$products[0]->name}}" >
                          <img src="{{$convert->showImage($img)}}" alt="{{$products[0]->name}}" /></a>
                        @endif
                      @endforeach
                      @endif                     
                      </big>
                      </figure>
                      <span class="luotxem">Lượt xem: {{$products[0]->viewer}}</span>
                     
                      </div>
                    <div class="aside_details">
                      <h2>{{$products[0]->name}}</h2>
                      <aside class="code"><strong>Mã sản phẩm :</strong> {{$products[0]->pro_code}}</aside>
                                            <aside class="giadigital">Giá : <?php if(Session::has("isuser")) {?><strong>{{number_format($products[0]->price_company)}} vnđ</strong>
                                              <strong style="opacity: 0.5;color: black;text-decoration: line-through;">{{number_format($products[0]->price)}} vnđ</strong>
                                              <?php }else {?> 
                                              <strong>{{number_format($products[0]->price)}} vnđ</strong><?php }?>
                                            </aside> 
                      <aside class="details"></aside>
                      <aside class="code">
                        @if($products[0]->status==0)
                        <strong>Tình trạng :Còn hàng</strong>
                        @elseif($products[0]->status==1)
                        <strong>Tình trạng :Hết hàng</strong>
                        @elseif($products[0]->status==2)
                        <strong>Tình trạng :Hàng mới</strong>
                        @endif
                      </aside>
                      <aside class="charge"> 
                          <span>Miễn phí charge qua thẻ </span>
                          <img src="{{Asset('')}}public/kingtech/images/icon_visa.gif" alt="Miễn phí charge qua thẻ" /> 
                      </aside> 
                      <!-- <aside class="chiase"> Chia sẽ
                      <aside class="social"> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> </aside>
                      </aside>  -->
                    </div>
                  </div>
                </aside>
            
        <div class="slider_croll fl_top30">
      
        @if(count($productsRefer)>0)
          <div class="box_title">
            <aside>
              <label>Có thể bạn quan tâm</label>
            </aside>
          </div>
            <div class="slider-info-items"> <span class="span_left"> <a href="" id="slider-nav-back" onClick="return false" > <img src="{{Asset('')}}public/kingtech/images/pre.png"></a> </span>
            @if($productsRefer!=null)
            @for($i=0;$i< count($productsRefer);$i++)
              <div class="item_pro">
                <figure><a href="{{Asset('')}}product/{{$productsRefer[$i]->id.'-'.$productsRefer[$i]->url}}" title="{{$productsRefer[$i]->name}}"><img src="{{$convert->showImage($productsRefer[$i]->image)}}" alt="{{$productsRefer[$i]->name}}" /></a></figure>
                <h2 style="margin-top:-27px"><a href="{{Asset('')}}product/{{$productsRefer[$i]->id.'-'.$productsRefer[$i]->url}}" title="{{$productsRefer[$i]->name}}">{{$productsRefer[$i]->name}}</a></h2>
                <span>
                @if(Session::has("isuser"))
                  <code>{{number_format($productsRefer[$i]->price_company)}} đ</code>
                @elseif(!Session::has("isuser"))
                  <code>{{number_format($productsRefer[$i]->price)}} đ</code>
                @endif
          </span> 
              </div>  
            @endfor
            @endif
            <span class="span_right"><a href="" id="slider-nav-next" onClick="return false" > <img src="{{Asset('')}}public/kingtech/images/next.png"></a> </span> </div >
      
        @endif

        </div>           
                <div role="tabpanel" class="box_tabs"> 
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"> <a href="#tongquan" aria-controls="tab" role="tab" data-toggle="tab">Tổng quan</a> </li>
                    <li role="presentation" > <a href="#thongso" aria-controls="tab" role="tab" data-toggle="tab">Thông số kỹ thuật</a> </li>
                    <li role="presentation"> <a href="#details" aria-controls="details" role="tab" data-toggle="tab">Khui hộp</a> </li>
                    <li role="presentation"> <a href="#sales" aria-controls="sales" role="tab" data-toggle="tab">Khuyến mãi</a> </li>
                  </ul>
                  
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab tab-pane active" id="tongquan">
                      <big>{!!$products[0]->overview!!}</big>
                    </div>
                    <div role="tabpanel" class="tab tab-pane" id="thongso">
                      <big>{!!$products[0]->specs!!}</big>
                    </div>
                    <div role="tabpanel" class="tab tab-pane" id="details">
                      <big>{!!$products[0]->accessories!!}</big>
                    </div>
                    <div role="tabpanel" class="tab tab-pane" id="sales">
                      <big>{!!$products[0]->promotion!!}</big>
                    </div>
                  </div>
                </div>
                <div class="box_comment">
                    <!--facebook comment-->
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
      <script>
        $('.nav-tabs>li').click(function(){
          $(".tab").each(function(){
            $(this).css("display","none");
            
          });
          $(".nav-tabs>li").each(function(){
            $(this).removeClass("active");
          });
          var content = (window.location.href.split('#')[1]);
              content = ($(this).children().attr('href').split('#')[1]);
          //alert(content);
          $("#"+content+"").css("display","block");
          $(this).addClass("active");
        });
      </script>
@endif
@endsection