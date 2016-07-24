<div class="box_pages_left">
      <div class="box_left_title"  id="list_1">
        <label>Sản phẩm bán chạy</label>
      </div>
      <div class="box_left_menu">
        <div class="slider-aside-group" data-dots-container="#list_1">
        @for($i=0;$i< count($productpromotion);$i+=2)
             <div class="item_good">
                <ul>
                    <li>
                    <figure><a href="{{$productpromotion[$i]->url}}" title="{{$productpromotion[$i]->name}}"><img src="{{Asset('')}}public/kingtech/images/p/{{$productpromotion[$i]->image}}" alt="{{$productpromotion[$i]->name}}" /></a></figure>
                    <h2><a href="{{$productpromotion[$i]->url}}" title="{{$productpromotion[$i]->name}}">{{$productpromotion[$i]->name}}</a></h2>
                    </li>
                    <li>
                    <figure><a href="{{$productpromotion[$i+1]->url}}" title="{{$productpromotion[$i+1]->name}}"><img src="{{Asset('')}}public/kingtech/images/p/{{$productpromotion[$i+1]->image}}" alt="{{$productpromotion[$i+1]->name}}" /></a></figure>
                    <h2><a href="{{$productpromotion[$i+1]->url}}" title="{{$productpromotion[$i+1]->name}}">{{$productpromotion[$i+1]->name}}</a></h2>
                    </li>
              
            </ul>
          </div>
      @endfor 
        </div>
        <div class="item_deals">
          <figure><a href="{{Asset('')}}deal.html"><img src="{{Asset('')}}public/kingtech/images/deal.png" alt="Deal Dangcapdigital" /></a></figure>
        </div>
      </div>
    </div>