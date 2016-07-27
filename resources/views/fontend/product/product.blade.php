@extends('fontend.layout_qc')
@section('box_center')

    <div class="box_pro">
      <div class="box_title">
        <aside>
        @foreach($categorys as $cate)
          @if($cate->id==$products[0]->cate_id)
          <label><a href="{{Asset('')}}category/{{$cate->id.'-'.$cate->url}}" title="{{$cate->name}}">{{$cate->name}}</a></label>
          @endif
        @endforeach
          <span></span> </aside>
      </div>
      <div class="box_item">
      @for($i=0;$i< count($products);$i++)
        <div class="item_pro">
          <figure><a href="{{Asset('')}}product/{{$products[$i]->id.'-'.$products[$i]->url}}" title="{{$products[$i]->name}}"><img src="{{$convert->showImage($products[$i]->image)}}" alt="{{$products[$i]->name}}"></a></figure>
          <h2><a href="{{Asset('')}}product/{{$products[$i]->id.'-'.$products[$i]->url}}" title="{{$products[$i]->name}}">{{$products[$i]->name}}</a></h2>
          <span>
          @if(Session::has("isuser"))
            <code>{{number_format($products[$i]->price_company)}} đ</code>
          @elseif(!Session::has("isuser"))
            <code>{{number_format($products[$i]->price)}} đ</code>
          @endif
            </span> 
         </div>
        @endfor

        </div>
<?php echo $products->appends(['sort' => 'votes'])->render(); ?>
    </div>        
 
@endsection