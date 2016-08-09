
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
            <!-- <div class="header_menu">
              <ul>
                
                  <li><a href="/" class="active">Trang chủ</a></li>
                @for($i=0;$i< count($menus);$i++)
                  @if($menus[$i]->show_menu_top==1)
                    
                    @if($menus[$i]->parent_id==0 && strtolower($menus[$i]->name)=="hỗ trợ")
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
                        <li class="menu_support">Hỗ trợ
                            
                            @if($flag)
                              <ul>
                                @for($j=0;$j< count($menus);$j++)
                                  @if($menus[$j]->parent_id!=0 && $menus[$j]->parent_id==$menus[$i]->id)
                                            <li><a href="{{Asset($menus[$j]->url)}}" title="{{$menus[$j]->name}}"><i class="fa fa-caret-right"></i> {{$menus[$j]->name}}</a></li>
                                  @endif
                                @endfor
                              </ul>
                            @endif
                    </li>
                    @elseif($menus[$i]->parent_id==0 && (strtolower($menus[$i]->name)=="ứng dụng" || strtolower($menus[$i]->name)=="kho ứng dụng"))
                          @if(count($cateApps)>0)
                          <li class="menu_line"></li>
                          <li class="menu_ungdung">{{$menus[$i]->name}}
                            <aside>
                              
                              @for($j=0;$j< count($cateApps);$j++)
                                @if($cateApps[$j]->parent==0)
                                  <ul>
                                      <label><a href="{{Asset('')}}app/{{$cateApps[$j]->id.'-'.$cateApps[$j]->url}}" title="{{$cateApps[$j]->name}}">{{$cateApps[$j]->name}}</a></label>
                                        @for($l=0;$l< count($cateApps);$l++)
                                          @if($cateApps[$l]->parent!=0 && $cateApps[$l]->parent==$cateApps[$j]->id)
                                            <li><a href="{{Asset('')}}app/{{$cateApps[$l]->id.'-'.$cateApps[$l]->url}}" title="{{$cateApps[$l]->name}}"> <i class="fa fa-caret-right"></i>{{$cateApps[$l]->name}}</a></li>
                                        @endif
                                      @endfor
                                  </ul>
                                  @endif
                                  @endfor                                     
                            </aside>
                          </li>
                          @endif
                    @elseif($menus[$i]->parent_id==0 && strtolower($menus[$i]->name)!="hỗ trợ")
                        <li><a href="{{Asset($menus[$i]->url)}}">{{$menus[$i]->name}}</a></li>                      
                    @endif
                  @endif
                @endfor
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </section>