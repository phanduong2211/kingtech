@foreach($website as $web)
@if($web->name=="background_menu")
<?php $bgMenu = $web->content; ?>
@elseif($web->name=="background_hover_menu")
<?php $bgMenuhover = $web->content; ?>
@endif
@endforeach

<style type="text/css">
  .divleft
  {
    float: left;
    width: 217px;
    height: 41px;
  }
  .divright .licap1
  {
    float: left;
    padding-left: 14px;
    padding-right: 14px;
    color: white;
    font-weight: bold;
    text-align: center;
    position: relative;
  }
  .divright .licap1 a
  {
    color:white;
  }

  .divright .licap1:hover
  {
    cursor: pointer;
    background: {{$bgMenuhover}};
  }
  .ulcap2 .licap2
  {
    list-style: none;
    margin-left:10px;

  }
  .ulcap1 .licap1:hover .ulcap2
  {
    display: block !important;
  }
  .ulcap2 .licap2 a
  {
     color: black;
     padding-top:20px;

  }
  .ulcap2 .licap2:hover a
  {
    color: red;
  }
  .ulcap2 .licap2 i
  {
    color: green;
  }
  .menuungdung:hover
  {
    display: block !important;
  }
  .ulcap2
  {
    background: white;
    display: none;
    position: absolute;
    width: 182px;
    box-shadow: 4px 7px 8px -4px black;
    text-align: left;
    z-index: 5;
    margin-left: -14px;
  }
  .menuungdung
  {
    margin-left: -137%;

  }
  .menuungdung ul a
  {
    padding-top: 20px;
  }
</style>

<div class="fl_section">
      <nav class="">
        <ul class="ulkingtech ulcap1" style="background:url('{{Asset($bgMenu)}}')">
          <div class="divleft">@include("fontend.home.menuleft")</div>
               <div class="divright"> @for($i=0;$i< count($menus);$i++)
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
                </div>
          
        </ul>
      </nav>
    </div>