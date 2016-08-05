<?php $title=""; ?>
@foreach($website as $tile)

                              @if($tile->name=="open_time")
                                <?php $title = $tile->content; ?>
                              @elseif($tile->name=="background_footer")
                                <?php $bg = $tile->content;?>
                              @endif
 @endforeach
<footer style="background:{{$bg}}">
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
                           <?php echo $title; ?>
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
          <code class="hidden_mobile">
          @foreach($website as $tile)
            @if($tile->name=="copyright")
              <?php echo $tile->content; ?>
            @endif
          @endforeach<br>
            <a href="http://lovadweb.com" title="Thiết kế website" target="_blank">Thiết kế website bởi lovadweb.com</a></code> </div>
        <div class="footer_line hidden_mobile"></div>
        <div class="footer_about hidden_mobile">
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

      <div class="show_mobile clearfix" id="menufootermobile">
        @foreach($menus as $menu)
         @if($menu->parent==0)
            <a href="{{Asset($menu->url)}}">{{$menu->name}}</a>
      @endif
          @endforeach
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