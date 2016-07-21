@extends('backend.layout')
@section('title','Loại sản phẩm - ACP')

@section('breadcrumb')
<h2>Loại sản phẩm</h2>
<h3 class="trole" data-role="category/create">
        <a href="{{url('admin/category/create')}}">Thêm Mới</a>
    </h3>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/t_table.css')}}" /> 
@endsection

@section('content')

    <div id="ttable" class="ttable">
    <ul class="subsubsub">
        <li><a data-filter="all" data-group-filter="a" data-subsubsub="true" href="#" class="current">Tất cả <span class="count"></span></a>|</li>
        <li><a data-filter='{"type":"attr","value":"1","attr_name":"data-showhome"}' data-group-filter="a" data-subsubsub="true" href="#">Hiển thị ngoài trang chủ <span class="count"></span></a>|</li>
        <li><a data-filter='{"type":"attr","value":"0","attr_name":"data-display"}' data-group-filter="a" data-subsubsub="true" href="#">Ẩn trên menu <span class="count"></span></a></li>
       
    </ul>
    <!--.subsubsub-->
    <div class="row captiontable">
        <div class="col-sm-6 col-md-7">

            <div class="group-action">
                <select id="bulk-action-selector-top" class="fleft" data-ajax=".checkboxb.checked" data-href='{"0":"@Url.Content("~/user/delete")","1":"@Url.Content("~/user/block")","2":"@Url.Content("~/user/block")"}' data-before="action">
                    <option value="-1" selected="selected">- Lưu sắp xếp -</option>
                    
                   <option value="1">Sắp xếp trang chủ</option>
                    <option value="2">Sắp xếp menu</option>
                </select>
                <input type="button" class="button fleft" data-target="#bulk-action-selector-top" value="Áp dụng">
            </div>

             
            <div class="group-action">
                <select id="filter-by-date" data-filter='{"type":"column","column":"select","filtertype":"^"}' data-group-filter="a">
                    <option selected="selected" value="-1">- Chọn -</option>
                    <option value="@DateTime.Now.ToString("dd/MM")" data-column="8">Truy cập hôm nay</option>
                    <option value="@DateTime.Now.ToString("dd/MM")" data-column="6">Tạo hôm nay</option>
                </select>
                <input type="button" class="button fleft" data-target="#filter-by-date" value="Lọc">
            </div>
            <div class="clearfloat"></div>
        </div>
        <!--col left-->
        <div class="col-sm-6 col-md-5 captionright">
            <div class="gsearchtable">
                <input type="button" class="button fright" data-target="#filter-by-search" value="Tìm kiếm" />
                <div class="searchicon">
                    <input type="text" id="filter-by-search" placeholder="Nhập nội dung cần tìm..." class="searchtable fright"
                        data-filter='{"type":"column","column":"all","fiter_column":[3,4,5,6]}' />
                    <i title="Xóa nội dung tìm kiếm.">&times;</i>
                </div>
                <div class="clearfloat"></div>
            </div>
            <div class="clearfloat"></div>
        </div>
    </div>
    <!--.captiontable-->
  <div style="overflow-x:auto;">
      <table>
          <thead>
              <tr>
                  <th width="35px">
                      <span class="ascheckbox checkall center" data-target=".checkboxb"></span>
                  </th>
                  <th class="tsort">S.Xếp trang chủ</th>
                  <th class="tsort">S.Xếp menu</th>
                  <th width="200px">Tên</th>
                  <th width="100px">Url</th>
                  <th width="100px">Mô tả</th>
                  <th width="100px">Từ khóa</th>
                  <th>H.Thị trang chủ</th>
                  <th>H.Thị menu</th>
              </tr>
          </thead>
          <tbody>

              <?php 
                                function dequy($parentid,$arr,$text = ''){
                                    $temp=array();
                                    foreach ($arr as $key => $value) {
                                        if($value->parent==$parentid){
                                          $temp[]=$value;

                                          unset($arr[$key]);  
                                        }
                                    }

                                    if(count($temp)>0){
                                        foreach($temp as $item){
                                            ?>
                                            <tr data-showhome="{{$item->show_home}}" data-display="{{$item->display}}">
                                          <td><span class="checkboxb ascheckbox center" data-value="{{$item->id}}"></span></td>
                                          <td>
                                            <span>
                                              <i class="hidden">{{$item->sort_home}}</i>
                                              <input type="text" class="inputTable" value="{{$item->sort_home}}" data-old="{{$item->sort_home}}" />
                                            </span>
                                            <div class="row-action">
                                                    <span title="Sửa thông tin"><a>Sửa</a>
                                                        <small>| </small>
                                                    </span>
                                                    <span class="delete">
                                                        <a class="event" 
                                                                data-ajax="true" 
                                                                data-href="{{url('admin/category/delete')}}"
                                                                 data-value="{{$item->id}}" 
                                                                data-success-remove="true" 
                                                                data-name="{{$item->name}}"
                                                                data-confirm="Bạn có chắc muốn xóa loại sản phẩm <b>{{$item->name}}</b>?<br /><small>Một khi xóa bạn sẽ không thể khôi phục lại được</small>"
                                                                href="#" title="Xóa loại sản phẩm này">Xóa</a>
                                                    </span>
                                                </div>
                                          </td>
                                          <td>
                                            <span class="hidden">{{$item->id}}</span>
                                            <input type="text" class="event inputTable" value="{{$item->sort_menu}}" data-old="{{$item->sort_menu}}" />
                                          </td>

                                          <td>
                                              {{$text.' '.$item->name}}
                                                
                                          </td>
                                          <td>
                                            {{$item->url}}
                                          </td>
                                          <td>
                                            <span class="cutlength" max-length="100">{{$item->meta_description}}</span>
                                          </td>
                                          <td>
                                            <span class="cutlength" max-length="100">{{$item->meta_keywords}}</span>
                                          </td>
                                          <td>
                                                    <span class="ascheckbox checkboxblock {{$item->show_home==1?'checked':''}}"
                                                data-background="none" 
                                                data-ajax="true" 
                                                data-href="{{url('admin/category/show_home')}}"
                                                data-value="{{$item->id}}" 
                                                data-name="{{$item->name}}"
                                                data-success="show_home"
                                                data-confirm="Bạn có chắc muốn <b>{yes=hiện thị}</b><b>{no=ẩn}</b> loại sản phẩm {name} ngoài trang chủ?"></span>
                                          </td>

                                          <td>
                                                    <span class="ascheckbox checkboxblock {{$item->display==1?'checked':''}}"
                                                data-background="none" 
                                                data-ajax="true" 
                                                data-href="{{url('admin/category/display')}}"
                                                data-value="{{$item->id}}" 
                                                data-name="{{$item->name}}"
                                                data-success="display"
                                                data-confirm="Bạn có chắc muốn <b>{yes=hiển thị}</b><b>{no=ẩn}</b> loại sản phẩm {name}?"></span>
                                          </td>


                                        </tr>
                                            <?php
                                            dequy($item->id,$arr,$text.'----');
                                        }
                                    }
                                }
                            dequy(0,$data);
                            ?>


          </tbody>

      </table>
      </div>
  </div><!--#ttable-->
    

@endsection

@section('script')
<script type="text/javascript" src="{{Asset('public/js/t_table.js')}}"></script>
 <script type="text/javascript">
	var currentPage = "#menu_product";
  var subPage = 'category';
	$(document).ready(function(){
    

    new TTable($("#ttable"),{
      'token':"{{csrf_token()}}",
      'alert':getAlert,
      'confirm':getConfirm,
      "showcount":function(obj,item){
              var count = obj.find("table tbody tr[data-showhome='1']").size();
              obj.find(".subsubsub li:eq(1) .count").html('(' + count + ')');

              count = obj.find("table tbody tr[data-display='0']").size();
              obj.find(".subsubsub li:eq(2) .count").html('(' + count + ')');
          },
        'action':function(href,arr,target){
          
          return false;
        }

      });

    $("#ttable table tbody .inputTable").keyup(function(){
        var val=parseInt($(this).val());
        if(isNaN(val)){
          $(this).val($(this).attr('data-old'));
          return false;
        }
    });

    $("#ttable table tbody .inputTable").change(function(){

    });

	});

	</script>
@endsection