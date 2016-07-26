@extends('fontend.layout_qc')
@section('box_center')
<div class="box_sales">
	@if(count($apps)>0)
      <div class="box_title">
        <aside>
       	@foreach($cateApps as $cateapp)
       		@if($cateapp->id == $apps[0]->cate_id)
	          <label>{{$cateapp->name}}</label>
	          <span></span> </aside><?php break;?>
	        @endif
	    @endforeach
      </div>
      <div class="box_ungdung fl_top30">
        <ul>
        	@foreach($apps as $app)
                <li>
	            <figure><a href="{{Asset('')}}app/detail/{{$app->id.'-'.$app->url}}" title="{{$app->name}}"><img src="{{Asset('')}}/public/kingtech/images/apps/{{$app->image}}" alt="{{$app->name}}"></a></figure>
	            <h2><a href="{{Asset('')}}app/detail/{{$app->id.'-'.$app->url}}" title="{{$app->name}}">{{$app->name}}</a></h2>
	            <span>{{$app->developers}}</span>
	            <label><a href="{{$app->app_url}}" target="_parent" title="{{$app->name}}" class="label-info">Tải về</a></label>
	          </li>
	        @endforeach
         </ul>
       </div>
       <?php echo $apps->appends(['sort' => 'votes'])->render(); ?>
       @elseif(count($apps)<=0)
       		Không tìm thấy ứng dụng
     @endif
    </div>

@endsection