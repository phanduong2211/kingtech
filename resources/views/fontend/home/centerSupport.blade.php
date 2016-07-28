<div class="box_trungtam">
            <div class="box_trungtam_title">
              <label></label>
            </div>
            <aside>
              <ul>
              @foreach($website as $support)
                @if($support->name=="sdt_mua_hang_tu_xa")
                  <?php $sdt_mua_hang_tu_xa = $support->content;?>
                @endif
                @if($support->name=="sdt_trung_tam_bh")
                  <?php $sdt_trung_tam_bh = $support->content;?>
                @endif
                @if($support->name=="sdt_dai_ly")
                  <?php $sdt_dai_ly = $support->content;?>
                @endif
                @if($support->name=="email")
                  <?php $email = $support->content;?>
                @endif
              @endforeach

                            <li class="fl_w280">
                  <figure><img src="{{Asset('')}}public/kingtech/images/icon/1-trung-tam.png" alt="Mua hàng từ xa"></figure>
                  <label class="fl_bold fl_top5 fl_upercase fl_size13">Mua hàng từ xa</label>
                   <big class="fl_top5"><span>{{$sdt_mua_hang_tu_xa}}</span><br>{{$email}}</big> </li>
                            <li class="fl_w280">
                  <figure><img src="{{Asset('')}}public/kingtech/images/icon/2-trung-tam.png" alt="Trung tâm bảo hành"></figure>
                  <label class="fl_bold fl_top5 fl_upercase fl_size13">Trung tâm bảo hành</label>
                   <big class="fl_top5"><span>{{$sdt_trung_tam_bh}}</span><br>{{$email}}</big> </li>
                            <li class="fl_w280">
                  <figure><img src="{{Asset('')}}public/kingtech/images/icon/3-trung-tam.png" alt="Đại lý, buôn bán"></figure>
                  <label class="fl_bold fl_top5 fl_upercase fl_size13">Đại lý, buôn bán</label>
                   <big class="fl_top5"><span>{{$sdt_dai_ly}}</span><br>{{$email}}</big> </li>
                
                
              </ul>
            </aside>
        </div>