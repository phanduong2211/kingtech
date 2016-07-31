<footer>
    <section>
      <div class="box_pages">
        <div class="box_static">
          <ul>
            <!-- <li>
              <label class="fl_upercase fl_bold">Thống kê</label>
              <big><strong>
                  74                </strong> khách online và <strong>5,740,166</strong> lượt truy cập</big> </li> -->
            <li>
              <label class="fl_upercase fl_bold">GIỜ MỞ CỬA</label>
              <big>
                          @foreach($website as $tile)
                              @if($tile->name=="open_time")
                                <?php echo $tile->content; ?>
                              @endif
                            @endforeach
                            </big> </li>
            <li>
              <label class="fl_upercase fl_bold">BẢO HÀNH</label>
              <big>
                @foreach($website as $tile)
                              @if($tile->name=="gio_bao_hanh")
                                <?php echo $tile->content; ?>
                              @endif
                            @endforeach
              </big> </li>
          </ul>
        </div>
        <div class="footer_line"></div>
        <div class="box_system">
          <aside>
            <label class="fl_upercase fl_bold">TRUNG TÂM KINGTECH</label>
                          <big class="fl_size14"><div>
                            @foreach($website as $tile)
                              @if($tile->name=="address")
                                <?php echo $tile->content; ?>
                              @endif
                            @endforeach
                          </div></big>
                      </aside>
          <code>
          @foreach($website as $tile)
            @if($tile->name=="copyright")
              <?php echo $tile->content; ?>
            @endif
          @endforeach<br>
            <a href="http://lovadweb.com" title="Thiết kế website" target="_blank">Thiết kế website bởi lovadweb.com</a></code> </div>
        <div class="footer_line"></div>
        <div class="footer_about">
          <label class="fl_upercase fl_bold">KINGTECH</label>
          <ul>
          @foreach($menus as $menu)
          @if($menu->show_footer==1)
            <li><a href="{{Asset($menu->url)}}">{{$menu->name}}</a></li>
          @endif
          @endforeach
          </ul>
        </div>
      </div>
      <div class="box_pages">
        <div class="box_trungtam_title">
          <label>DANH SÁCH ĐẠI LÝ KINGTECH TRÊN TOÀN QUỐC</label>
        </div>
        <div class="box_daily" style="background: #101010;">
          <div class="pages_daily">
            <div class="footer_daily fl_top10 fl_left">
              <div class="daily_title fl_bold fl_upercase">MIỀN BẮC</div>
              <ul>
                @foreach($branches as $branch)
                @if($branch->zone==1)
                 <li>
                    <?php $i=1;?>
                    <label>{!!$branch->name!!}</label>
                    @foreach($agency as $agen)
                    @if($branch->id==$agen->branch_id)
                    <big>
                                              <span> <strong> CS{{$i}}:</strong> <code><a href="void::javascript()" title="{{$agen->name}}">{!!$agen->address!!}</a></code>
                            <p>{!!$agen->phone!!}</p>
                            </span>
                                          </big> 
                    @endif
                    @endforeach
                    <?php $i++;?>
              </li>
              @endif
              @endforeach
            </ul>
            </div>
            <div class="footer_daily fl_top10 fl_left">
              <div class="daily_title fl_bold fl_upercase">MIỀN Trung</div>
              <ul class="daily_1">
                
                @foreach($branches as $branch)
                @if($branch->zone==3)
                 <li>
                    <?php $i=1;?>
                    <label>{!!$branch->name!!}</label>
                    @foreach($agency as $agen)
                    @if($branch->id==$agen->branch_id)
                    <big>
                                              <span> <strong> CS{{$i}}:</strong> <code><a href="void::javascript()" title="{{$agen->name}}">{!!$agen->address!!}</a></code>
                            <p>{{!!$agen->phone!!}}</p>
                            </span>
                                          </big> 
                    @endif
                    @endforeach
                    <?php $i++;?>
              </li>
              @endif
              @endforeach
            </ul>
            </div>
            <div class="footer_daily fl_top10 fl_left">
              <div class="daily_title fl_bold fl_upercase">MIỀN Nam</div>
              <ul>
                
                @foreach($branches as $branch)
                @if($branch->zone==2)
                 <li>
                    <?php $i=1;?>
                    <label>{!!$branch->name!!}</label>
                    @foreach($agency as $agen)
                    @if($branch->id==$agen->branch_id)
                    <big>
                                              <span> <strong> CS{{$i}}:</strong> <code><a href="void::javascript()" title="{{$agen->name}}">{!!$agen->address!!}</a></code>
                            <p>{{!!$agen->phone!!}}</p>
                            </span>
                                          </big> 
                    @endif
                    @endforeach
                    <?php $i++;?>
              </li>
              @endif
              @endforeach
            </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="box_pages fl_wfull">
        <div class="box_tags">
          <label>Tags :</label>
            @foreach($tags as $tag)
                      <h2><a href="{{$tag->url}}" target="_blank">{{$tag->name}}</a></h2>
            @endforeach
        </div>
        
        <div class="box_coppy"> 
        @foreach($website as $tile)
          @if($tile->name=="giay_phep")
            <?php echo $tile->content; ?>
          @endif
        @endforeach
        </em> </div>
      </div>
    </section>
  </footer>