<div class="fl_section">
      <nav class="">
        <ul>
          @for($i=0;$i<count($categorys);$i++)
            @if($categorys[$i]->parent==0)
            <!-- begin kiểm tra xem có category con không -->
                      <?php
                          $flag = false;
                          for($k=0;$k<count($categorys);$k++)
                          { 
                            if($categorys[$k]->parent!=0 && $categorys[$k]->parent==$categorys[$i]->id)
                              $flag=true;
                          }
                       ?>
              <!-- end kiểm tra xem có category con không -->
                      <li><a href="/c/93-dang-cap-digital" title="{{$categorys[$i]->name}}">{{$categorys[$i]->name}}                                  
                      <?php if($flag) echo '<i class="fa fa-caret-down"></i>';?>
                              </a>
                              <!-- begin nếu có category con -->
                              @if($flag)
                              <ul class="left">
                                  @for($j=0;$j<count($categorys);$j++)
                                    @if($categorys[$j]->parent!=0 && $categorys[$j]->parent==$categorys[$i]->id)
                                      <li><i class="fa fa-circle"></i> <a href="/c/405-may-bay-dieu-khien" title="{{$categorys[$j]->name}}">{{$categorys[$j]->name}}</a></li>
                                    @endif
                                  @endfor
                              </ul>
                              @endif
                              <!-- end nếu có category con -->
                          </li>
            @endif
          @endfor  
        </ul>
      </nav>
    </div>