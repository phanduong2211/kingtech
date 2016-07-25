<style>
  .slider-info-items .item_pro h2
  {
    height: 18px !important;
    margin-top:auto;
  }
  .box_tieudem_title
  {
    height: 39px !important;
  }
  .search_line
  {
    margin-top:-8px;
  }
</style>
@if(count($newproducts)>0)
<div class="slider_croll">
      <div class="box_title">
        <aside>
          <label>Sản phẩm mới</label>
          <span></span> </aside>
      </div>
      <div class="slider-info-items"> <span class="span_left"> <a href="" id="slider-nav-back" onClick="return false" > <img src="public/kingtech/images/pre.png"></a> </span>

        @for($i=0;$i< count($newproducts);$i++)
          <div class="item_pro">
            <figure><a href="{{Asset('')}}product/{{$newproducts[$i]->id.'-'.$newproducts[$i]->url}}" title="{{$newproducts[$i]->name}}"><img src="public/kingtech/images/p/{{$newproducts[$i]->image}}" alt="{{$newproducts[$i]->name}}" /></a></figure>
            <h2><a href="{{Asset('')}}product/{{$newproducts[$i]->id.'-'.$newproducts[$i]->url}}" title="{{$newproducts[$i]->name}}">{{$newproducts[$i]->name}}</a></h2>
            <span><code>{{number_format($newproducts[$i]->price)}} đ</code></span> 
          </div>
        @endfor

                <span class="span_right"><a href="" id="slider-nav-next" onClick="return false" > <img src="public/kingtech/images/next.png"></a> </span> </div >
    </div>
@endif