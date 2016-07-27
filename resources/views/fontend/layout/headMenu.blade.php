<section>
      <div class="body_pages">
        <div class="article_header">
          <div style="width:3%" class="logo">
            <figure><a href="{{Asset('')}}" title="kingtech"><img src="{{Asset('')}}public/kingtech/images/logo-hao-huan.png" alt="kingtech"></a></figure>
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
                      <li> Để được hỗ trợ tư vấn tốt hơn các bạn có thể liên hệ qua hotline: </li>
                      <li> <strong>0862.788.788 -0907.9988.38</strong> </li>
                      <li> Hoặc email: </li>
                      <li> <strong>minhnhat@kingtech.com.vn</strong> </li>
                      <li> Bạn cũng có thể để lại tin nhắn trên tường Fanpage, Google+, Youtube của kingtech.com.vn dể được hỗ trợ tốt nhất : </li>
                      <li> <a href="https://facebook.com/kingtechdotcom" target="_blank">
                          <figure><img src="{{Asset('')}}public/kingtech/images/icon_face.png"></figure>
                        </a> <a href="" target="_blank">
                          <figure><img src="{{Asset('')}}public/kingtech/images/icon_google.png"></figure>
                        </a> <a href="" target="_blank">
                          <figure><img src="{{Asset('')}}public/kingtech/images/icon_twitter.png"></figure>
                        </a> </li>
                    </ul>
                  </div>
                  <div class="hotro_div">
                    <figure> <img src="{{Asset('')}}public/kingtech/images/icon_support_1.png" alt="Hỗ trợ trực tuyến"> </figure>
                    <label>Phân phối</label>
                    <ul>
                                              <li> <strong>Phân phối sỉ</strong> <big>0938.99.88.37 -
                                                          <a href="ymsgr:sendIM?bansikingtech"><img src="{{Asset('')}}public/kingtech/images/y.png" border="0"></a>
                                                          <a href="skype:minhnhatdigital?chat">&nbsp;<img src="{{Asset('')}}public/kingtech/images/s.png" border="0"></a>
                                                      </big> </li>
                                              <li> <strong>Hotline Phân Phối SỈ Và Lẻ</strong> <big>09079988388 -
                                                          <a href="ymsgr:sendIM?kingtech1"><img src="{{Asset('')}}public/kingtech/images/y.png" border="0"></a>
                                                          <a href="skype:minhnhatdigital?chat">&nbsp;<img src="{{Asset('')}}public/kingtech/images/s.png" border="0"></a>
                                                      </big> </li>
                                          </ul>
                  </div>
                  <div class="hotro_div">
                    <figure> <img src="{{Asset('')}}public/kingtech/images/icon_support_2.png" alt="Hỗ trợ trực tuyến"> </figure>
                    <label>Hỗ trợ kỹ thuật</label>
                    <ul>
                                              <li> <strong>Tư vấn bán hàng</strong> <big>0862.722.722 -
                                                          <a href="ymsgr:sendIM?hotro_kingtech"><img src="{{Asset('')}}public/kingtech/images/y.png" border="0"></a>
                                                          <a href="skype:hotro_kingtech?chat">&nbsp;<img src="{{Asset('')}}public/kingtech/images/s.png" border="0"></a>
                                                      </big> </li>
                                              <li> <strong>Hướng Dẫn Sử Dụng</strong> <big>0862788788 -
                                                          <a href="ymsgr:sendIM?kythuatkingtech"><img src="{{Asset('')}}public/kingtech/images/y.png" border="0"></a>
                                                          <a href="skype:minhnhatdigital?chat">&nbsp;<img src="{{Asset('')}}public/kingtech/images/s.png" border="0"></a>
                                                      </big> </li>
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
            </div>
          </div>
        </div>
      </div>
    </section>