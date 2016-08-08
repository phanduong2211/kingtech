@foreach($website as $web)
@if($web->name=="background_header")
<?php $bghead = $web->content; ?>
@endif
@endforeach
<section class="hidden_mobile">
      <div class="body_pages" style="background:{{$bghead}}">
        <div class="article_header">
          <div style="width:3%" class="logo">
            <figure><a href="{{Asset('')}}" title="kingtech"><img src="{{Asset('')}}public/images/logo.jpg" alt="kingtech"></a></figure>
          </div>
          <div class="article_header_right">
            <div class="header_cart">
              <!-- <div class="giohang">
                                <a href="/gio-hang.html">GIỎ HÀNG <span class="fl_cart">0</span> SẢN PHẨM</a> </div> -->
              <div class="login"><a href="{{Asset('')}}gia-si.html"><span>Xem Giá Sỉ</span></a></div>
              <div class="hotro"> <img src="{{Asset('')}}public/kingtech/images/icon_support.png" alt="Hỗ trợ trực tuyến">
                <aside>
                  <div class="hotro_support">
                    <label>Hỗ trợ trực truyến</label>
                    <ul>
                    @foreach($website as $web)
                    @if($web->name=="hotline")
                      <?php $isSp = true;
                            $hotline = $web->content;
                       ?>
                    @elseif($web->name=="email")
                    <?php 
                            $email = $web->content;
                       ?>
                       @elseif($web->name=="facebook")
                    <?php 
                            $facebook = $web->content;
                       ?>
                       @elseif($web->name=="google")
                    <?php 
                            $google = $web->content;
                       ?>
                       @elseif($web->name=="twitter")
                    <?php 
                            $twitter = $web->content;
                       ?>
                    @endif
                    @endforeach
                    @if($isSp)                    
                      <li> Để được hỗ trợ tư vấn tốt hơn các bạn có thể liên hệ qua hotline: </li>
                      <li> <strong>{{$hotline}}</strong> </li>
                      <li> Hoặc email: </li>
                      <li> <strong>{{$email}}</strong> </li>
                      <li> Bạn cũng có thể để lại tin nhắn trên tường Fanpage, Google+, Youtube của kingtech.com.vn dể được hỗ trợ tốt nhất : </li>
                      <li> <a href="{{$facebook}}" target="_blank">
                          <figure><img src="{{Asset('')}}public/kingtech/images/icon_face.png"></figure>
                        </a> <a href="{{$google}}" target="_blank">
                          <figure><img src="{{Asset('')}}public/kingtech/images/icon_google.png"></figure>
                        </a> <a href="{{$twitter}}" target="_blank">
                          <figure><img src="{{Asset('')}}public/kingtech/images/icon_twitter.png"></figure>
                        </a> </li>      
                    @endif        
                    </ul>
                  </div>
                  <div class="hotro_div">
                    <figure> <img src="{{Asset('')}}public/kingtech/images/icon_support_1.png" alt="Hỗ trợ trực tuyến"> </figure>
                    <label>Phân phối</label>
                    <ul>
                    @foreach($support as $sp)
                      @if($sp->group==1)
                                              <li> <strong>{{$sp->name}}</strong> <big>{{$sp->phone}}
                                                          <a href="ymsgr:sendIM?{{$sp->yahoo}}"><img src="{{Asset('')}}public/kingtech/images/y.png" border="0"></a>
                                                          <a href="skype:{{$sp->skype}}?chat">&nbsp;<img src="{{Asset('')}}public/kingtech/images/s.png" border="0"></a>
                                                      </big> 
                                                      <p><strong>Email:</strong> {{$sp->email}}</p>
                                                      </li>
                                              <li>
                        @endif
                        @endforeach
                                          </ul>
                  </div>
                  <div class="hotro_div">
                    <figure> <img src="{{Asset('')}}public/kingtech/images/icon_support_2.png" alt="Hỗ trợ trực tuyến"> </figure>
                    <label>Hỗ trợ kỹ thuật</label>
                    <ul>
                    @foreach($support as $sp)
                      @if($sp->group==2)
                                              <li> <strong>{{$sp->name}}</strong> <big>{{$sp->phone}}
                                                          <a href="ymsgr:sendIM?{{$sp->yahoo}}"><img src="{{Asset('')}}public/kingtech/images/y.png" border="0"></a>
                                                          <a href="skype:{{$sp->skype}}?chat">&nbsp;<img src="{{Asset('')}}public/kingtech/images/s.png" border="0"></a>
                                                      </big> 
                                                      <p><strong>Email:</strong> {{$sp->email}}</p>
                                                      </li>
                          @endif
                        @endforeach
                                          </ul>
                  </div>
                </aside>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>