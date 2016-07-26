@extends('fontend.layout_qc')
@section('box_center')

          <div class="box_sales">
            <div class="box_news_title">
              <aside>
              <?php $Pleft = 0; ?>
                  @for($i=0;$i< count($NewsCate);$i++)
                    <label style="left:{{$Pleft}}" class=""><a href="{{Asset('')}}tin-tuc/{{$NewsCate[$i]->url}}" title="$NewsCate[$i]->name}}">{{$NewsCate[$i]->name}}</a></label>
                    <?php $Pleft += 147; ?>
                  @endfor   
                
              </aside>
            </div>
            @if(count($detailnews)>0)
            <div class="box_about">
            	<h2>{{$detailnews[0]->title}}</h2>
            <big>
              <div style="mso-element:para-border-div;border:none;    border-bottom:double windowtext 2.25pt;
                padding:0in 0in 1.0pt 0in">
                {{$detailnews[0]->title}}
              </div>
            @endif
            </big>
                <aside>
                	<label>Các tin khác</label>
                  @for($i=0;$i< count($newsRefer);$i++)
                    @for($j=0;$j< count($NewsCate);$j++)
                      @if($newsRefer[$i]->cate_id==$NewsCate[$j]->id)
    					        <li>
                        <a href="{{Asset('')}}tin-tuc/{{$NewsCate[$j]->url}}/{{$newsRefer[$i]->url}}" title="{{$newsRefer[$i]->title}}}">+ {{$newsRefer[$i]->title}}</a>
                      </li>
                      @endif
                    @endfor
                  @endfor            
                 </aside>
            </div>
          </div>
        </div>
    
@endsection