
<link rel="stylesheet" type="text/css" href="{{Asset('')}}public/kingtech/css/huyphu.css">
<script type="text/javascript" src="{{Asset('')}}public/kingtech/js/bootstrap.js"></script>
<script type="text/javascript" src="{{Asset('')}}public/kingtech/js/owl.carousel.js"></script>
<style type="text/css">
    #collapseOne
    {
        background: white;
    }
    #collapseOne li a
    {
        color: black;
    }
    #collapseOne .lileve1:hover
    {
       background: #337ab7;
       color:white;
    }
    #collapseOne li:hover a
    {
        color:white;
    }
    #collapseOne li:hover .firt li
    {
        background: #F2F2F2;
    }
    #collapseOne li:hover .mis li
    {
        background: white;
    }
     #collapseOne li:hover .mis li a
     {
        color: black;
     }
     
    #collapseOne li:hover .firt li a
    {
        color:black;
    }
    .product
    {
        
        width: 215px;
        position: absolute;
        z-index: 999;
        font-weight: bold;

    }
    .product a
    {
        color:white;
        padding-left:5px;
    }
    #collapseOne li
    {
        line-height: 40px;
        padding-left: 10px;
    }
    #collapseOne li a
    {
        padding-left: 5px;
    }
    ul,li
    {
        list-style: none;
    }
    a
    {
        text-decoration: none;

    }

</style>

<li class="product">
<i style="color:white;padding-left:5px" class="fa fa-reorder"></i>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="collapsed">Danh mục sản phẩm <i class="glyphicon glyphicon-triangle-bottom"></i></a>
                                <ul id="collapseOne" class="panel-collapse collapse  fade-ul" aria-expanded="true">
                                @foreach($categorys as $category)
                                @if($category->parent==0)
                                
                                        <li class="lileve1">
                                            <i class="fa fa-desktop"></i><a href="{{Asset('category/'.$category->id.'-'.$category->url)}}" title="{{$category->name}}">{{$category->name}}</a>
                                                <ul>
                                                
                                                    <li>
                                                        <ul class="firt">
                                                            <li>


                                                            </li>
                                                            <li>
                                                                <a style="color:#3d8b40;text-transform: uppercase;" href="void::javascript()">Hãng sản xuất</a>
                                                                <ul>
                                                                @foreach($categorys as $childcate)
                                                                @if($category->id==$childcate->parent)
                                                                        <li>
                                                                            <a href="{{Asset('category/'.$childcate->id.'-'.$childcate->url)}}" title="{{$childcate->name}}">{{$childcate->name}}</a>
                                                                        </li>
                                                                @endif
                                                                @endforeach        
                                                                </ul>


                                                            </li>
                                                            <li>

                                                            </li>
                                                        </ul>
                                                    </li>                                                
                                                    <li class="mis">
                                                        <ul>
                                                            <li class="quantam">
                                                                <a style="color:#3d8b40;text-transform: uppercase;" href="void::javascript()">Có thể bạn quan tâm.</a>
                                                                <ul>
                                                                        <li><a href="/tin-tuc/ung-dung-hay/tong-hop-nhung-ung-dung-dac-sac-tren-android-tv-box.html">Tổng hợp những ứng dụng đặc sắc nhất trên Android TV Box</a>
                                                                        </li>
                                                                        
                                                                </ul>
                                                            </li>
                                                            <li class="panel">
                                                                <a href="http://beta.huyphu.com/android-tv-box-gia-re.p1.html"><img src="http://ad.huyphu.com/ckfinder/upload/images/BANER%20android%20box%20123(2).jpg" style="max-height: 120px; max-width: 330px" alt="Biến tv thường thành tv thông minh"></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    

                                                    <li>
                                                        <a href="http://huyphu.com/tay-cam-choi-game.html"><img src="http://media.huyphu.com/medias/images/promotion%20huy%20phu%20banner/baner%20phu%20kien%20sua%20lai.png" style="width: 200px; height: 332px; " alt="Tay cầm chơi game cho điện thoại chinh hãng giá re"></a>
                                                    </li>
                                            
                                                </ul>
                                        </li>
                                        
                                
                                @endif
                                @endforeach
                                </ul>
                            </li>