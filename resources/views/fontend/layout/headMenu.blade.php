
<section class="hidden_mobile">
      <div class="body_pages" style="background:{{$website['background_header']}}">
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
                   <?php $isSp = true; ?>
                    @if($isSp)                    
                      <li> Để được hỗ trợ tư vấn tốt hơn các bạn có thể liên hệ qua hotline: </li>
                      <li> <strong>{{$website['hotline']}}</strong> </li>
                      <li> Hoặc email: </li>
                      <li> <strong>{{$website['email']}}</strong> </li>
                      <li> Bạn cũng có thể để lại tin nhắn trên tường Fanpage, Google+, Youtube của kingtech.com.vn dể được hỗ trợ tốt nhất : </li>
                      <li> <a href="{{$website['facebook']}}" target="_blank">
                          <figure><img src="{{Asset('')}}public/kingtech/images/icon_face.png"></figure>
                        </a> <a href="{{$website['google']}}" target="_blank">
                          <figure><img src="{{Asset('')}}public/kingtech/images/icon_google.png"></figure>
                        </a> <a href="{{$website['twitter']}}" target="_blank">
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
            <div class="header_menu">
              <ul>
              <li><a href="/" class="active">Trang chủ</a></li>
               @for($i=0;$i< count($menus);$i++)
                  @if($menus[$i]->show_menu_top==1)
                    
                    @if($menus[$i]->parent_id==0 && strtolower($menus[$i]->name)=="hỗ trợ")
                    <!--begin kiểm tra xem tồn tại menu con cho mục trở giúp không, 
                    nếu có thì flag =true ngược lại bằng false-->
                        <?php 
                            $flag=false;
                              for($ht=0;$ht < count($menus);$ht++)    
                              {     
                                    //echo  $menus[$ht]->parent_id."=".$menus[$i]->id."-";                 
                                    if($menus[$ht]->parent_id!=0 && $menus[$ht]->parent_id==$menus[$i]->id)
                                    {
                                        $flag = true;
                                        break;
                                    }
                              }

                        ?>
                        <!--end  kiểm tra xem tồn tại menu con cho mục trở giúp không-->
                        <li class="menu_support licap1">Hỗ trợ
                            
                            @if($flag)
                              <ul class="ulcap2">
                                @for($j=0;$j< count($menus);$j++)
                                  @if($menus[$j]->parent_id!=0 && $menus[$j]->parent_id==$menus[$i]->id)
                                            <li class="licap2"><a href="{{Asset($menus[$j]->url)}}" title="{{$menus[$j]->name}}"><i class="fa fa-caret-right"></i> {{$menus[$j]->name}}</a></li>
                                  @endif
                                @endfor
                              </ul>
                            @endif
                    </li>

                    @elseif($menus[$i]->parent_id==0 && (mb_strtolower($menus[$i]->name)=="ứng dụng" || mb_strtolower($menus[$i]->name)=="kho ứng dụng"))
                          @if(count($cateApps)>0)
                          <li class="menu_ungdung licap1">{{$menus[$i]->name}}
                            <aside class="menuungdung">
                              
                              @for($j=0;$j< count($cateApps);$j++)
                                @if($cateApps[$j]->parent==0)
                                  <ul class="">
                                      <label><a href="{{Asset('')}}app/{{$cateApps[$j]->id.'-'.$cateApps[$j]->url}}" title="{{$cateApps[$j]->name}}">{{$cateApps[$j]->name}}</a></label>
                                        @for($l=0;$l< count($cateApps);$l++)
                                          @if($cateApps[$l]->parent!=0 && $cateApps[$l]->parent==$cateApps[$j]->id)
                                            <li class="licap2"><a href="{{Asset('')}}app/{{$cateApps[$l]->id.'-'.$cateApps[$l]->url}}" title="{{$cateApps[$l]->name}}"> <i class="fa fa-caret-right"></i>{{$cateApps[$l]->name}}</a></li>
                                        @endif
                                      @endfor
                                  </ul>
                                  @endif
                                  @endfor                                     
                            </aside>
                          </li>
                          @endif
                    @elseif($menus[$i]->parent_id==0 && mb_strtolower($menus[$i]->name)!="hỗ trợ")
                        <li class="licap1"><a href="{{Asset($menus[$i]->url)}}">{{$menus[$i]->name}}</a></li>                      
                    @endif
                  @endif
                @endfor

                                
               <!--  <li class="menu_line"></li>
                                <li><a href="http://dangcapdigital.com/gioi-thieu.html">Giới thiệu</a></li>
                <li class="menu_line"></li>
                                <li><a href="http://dangcapdigital.com/tin-tuc.html">Tin tức</a></li>
                <li class="menu_line"></li>
                                <li><a href="http://dangcapdigital.com/video.html">Video</a></li>
                <li class="menu_line"></li> -->
                <!-- <li class="menu_support">Hỗ trợ
                  <ul>
                                          <li><a href="http://dangcapdigital.com/s/1-quy-dinh-bao-hanh" title="Quy định bảo hành"><i class="fa fa-caret-right"></i> Quy định bảo hành</a></li>
                                          <li><a href="http://dangcapdigital.com/s/2-dieu-khoan-su-dung" title="Điều khoản sử dụng"><i class="fa fa-caret-right"></i> Điều khoản sử dụng</a></li>
                                          <li><a href="http://dangcapdigital.com/s/3-huong-dan-mua-hang" title="Hướng dẫn mua hàng"><i class="fa fa-caret-right"></i> Hướng dẫn mua hàng</a></li>
                                          <li><a href="http://dangcapdigital.com/s/4-chinh-sach-bao-mat" title="Chính sách bảo mật"><i class="fa fa-caret-right"></i> Chính sách bảo mật</a></li>
                                          <li><a href="http://dangcapdigital.com/s/5-chinh-sach-mua-hang" title="Chính sách mua hàng"><i class="fa fa-caret-right"></i> Chính sách mua hàng</a></li>
                                          <li><a href="http://dangcapdigital.com/s/6-chinh-sach-doi-hang" title="Chính sách đổi hàng"><i class="fa fa-caret-right"></i> Chính sách đổi hàng</a></li>
                                          <li><a href="http://dangcapdigital.com/s/7-chinh-sach-van-chuyen" title="Chính sách vận chuyển"><i class="fa fa-caret-right"></i> Chính sách vận chuyển</a></li>
                                      </ul>
                </li> -->
                <!-- <li class="menu_line"></li>
                                <li class="menu_ungdung">Kho ứng dụng
                                <aside>
                                          <ul>
                        <label><a href="http://dangcapdigital.com/kho-ung-dung/23-kodi-dangcapdigital" title="KODI DANGCAPDIGITAL">KODI DANGCAPDIGITAL</a></label>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/24-addon-kodi-dangcapdigital" title="Addon Kodi Dangcapdigital"> <i class="fa fa-caret-right"></i> Addon Kodi Dangcapdigital</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/25-kodi-dangcapdigitalexe" title="kodi Dangcapdigital.EXE"> <i class="fa fa-caret-right"></i> kodi Dangcapdigital.EXE</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/26-kodi-dangcapdigitalapk" title="Kodi Dangcapdigital.APK"> <i class="fa fa-caret-right"></i> Kodi Dangcapdigital.APK</a></li>
                                              </ul>
                                          <ul>
                        <label><a href="http://dangcapdigital.com/kho-ung-dung/1-ung-dung" title="Ứng dụng">Ứng dụng</a></label>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/9-truyen-hinh" title="Truyền hình"> <i class="fa fa-caret-right"></i> Truyền hình</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/10-nghe-nhac" title="Nghe nhạc"> <i class="fa fa-caret-right"></i> Nghe nhạc</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/11-hat-karaoke" title="Hát karaoke"> <i class="fa fa-caret-right"></i> Hát karaoke</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/15-ung-dung-camera-ip" title="Ứng dụng Camera IP"> <i class="fa fa-caret-right"></i> Ứng dụng Camera IP</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/4-phim-anh" title="Phim ảnh"> <i class="fa fa-caret-right"></i> Phim ảnh</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/5-mang-xa-hoi" title="Mạng xã hội"> <i class="fa fa-caret-right"></i> Mạng xã hội</a></li>
                                              </ul>
                                          <ul>
                        <label><a href="http://dangcapdigital.com/kho-ung-dung/2-game-tro-choi" title="Game - trò chơi">Game - trò chơi</a></label>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/12-hanh-dong-nhap-vai" title="Hành động - nhập vai"> <i class="fa fa-caret-right"></i> Hành động - nhập vai</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/13-dua-xe-the-thao" title="Đua xe - thể thao"> <i class="fa fa-caret-right"></i> Đua xe - thể thao</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/14-game-ho-tro-gamepad" title="Game hỗ trợ Gamepad"> <i class="fa fa-caret-right"></i> Game hỗ trợ Gamepad</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/6-tri-tue-cau-do" title="Trí tuệ - Câu đố"> <i class="fa fa-caret-right"></i> Trí tuệ - Câu đố</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/7-chien-thuat" title="Chiến thuật"> <i class="fa fa-caret-right"></i> Chiến thuật</a></li>
                                              </ul>
                                          <ul>
                        <label><a href="http://dangcapdigital.com/kho-ung-dung/20-firmware" title="Firmware">Firmware</a></label>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/21-skyboxtv" title="Skyboxtv"> <i class="fa fa-caret-right"></i> Skyboxtv</a></li>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/22-minix" title="Minix"> <i class="fa fa-caret-right"></i> Minix</a></li>
                                              </ul>
                                          <ul>
                        <label><a href="http://dangcapdigital.com/kho-ung-dung/17-camera-ip" title="Camera IP">Camera IP</a></label>
                                                  <li><a href="http://dangcapdigital.com/kho-ung-dung/19-sricam" title="Sricam"> <i class="fa fa-caret-right"></i> Sricam</a></li>
                                              </ul>
                                      </aside>
                </li>
                <li class="menu_line"></li>
                                <li><a href="http://dangcaphd.com/movie/movies.html" target="_blank">Xem phim</a></li>
                <li class="menu_line"></li>
                                <li><a href="http://dangcapdigital.com/dai-ly-phan-phoi.html">Danh sách đại lý</a></li>
                <li class="menu_line"></li>
                                <li><a href="http://dangcapdigital.com/thong-tin-lien-he.html">Liên hệ</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>