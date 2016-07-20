@extends('backend.layout')
@section('title','Admin Control Panel')

@section('breadcrumb')
<h2>Người dùng</h2>
<h3 class="trole" data-role="user/create">
        <a href="">Thêm Mới</a>
    </h3>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/t_table.css')}}" /> 
@endsection

@section('content')

<div id="ttable" class="ttable">
       <ul class="subsubsub">
            <li><a data-filter="all" data-group-filter="a" data-subsubsub="true"  href="#" class="current">Tất cả <span class="count"></span></a>|</li>
            <li><a data-filter='{"type":"attr","value":"1","attr_name":"data-block"}' data-group-filter="a" data-subsubsub="true" href="#">Đang khóa <span class="count"></span></a></li>
       </ul>
       <!--.subsubsub-->
       <div class="row captiontable">
          <div class="col-sm-7 col-md-8">
             <div class="group-action">
                <select id="bulk-action-selector-top" class="fleft">
                   <option value="-1" selected="selected">- Hành động -</option>
                   <option value="Xóa">Xóa</option>
                </select>
                <input type="button" class="button fleft" value="Áp dụng">
             </div>
             <form class="group-action" method="get" action="">
                <select id="filter-by-date" name="aa" data-filter='{"type":"column","column":"select","filtertype":"^"}'>
                   <option selected="selected" value="-1">- Lọc tất cả -</option>
                   <option value="19/07" data-column="7">Truy cập hôm nay</option>
                   <option value="2/2" data-column="8">Tạo hôm nay</option>
                </select>
                <input type="submit" class="button fleft" data-target="#filter-by-date" value="Lọc">
             </form>
             <div class="clearfloat"></div>
          </div>
          <!--col left-->
          <div class="col-sm-5 col-md-4 captionright">
             <form class="gsearchtable" action="" method="get">
                <input type="submit" class="button fright" data-target="#filter-by-search" value="Tìm kiếm" />
                <div class="searchicon">
                   <input type="text" name="q" id="filter-by-search" placeholder="Nhập nội dung cần tìm..." class="searchtable fright" data-filter='{"type":"column","column":"all","fiter_column":[1,3,4,8]}' />
                   <i title="Xóa nội dung tìm kiếm.">&times;</i>
                </div>
                <div class="clearfloat"></div>
             </form>
             <div class="clearfloat"></div>
          </div>
       </div>
       <!--.captiontable-->
       <div style="overflow-x:auto;">
          <table style="min-width:900px">
             <thead>
                <tr>
                   <th width="35px">
                      <span class="ascheckbox checkall center" data-target=".checkboxb"></span>
                   </th>
                   <th class="tsort">Họ Tên</th>
                   <th>Giới Tính</th>
                   <th>Lớp</th>
                   <th>Địa Chỉ</th>
                   <th>Khóa</th>
                   <th>Trạng Thái</th>
                   <th>Ngày cập nhật</th>
                   <th>Ngày tạo</th>
                </tr>
             </thead>
             <tbody>
                <tr data-block="1">
                        <td><span class="checkboxb ascheckbox center" data-value="1"></span></td>
                        <td>
                            <span>Admin</span>
                            <div class="row-action">
                                <span title="Sửa thông tin"><a>Sửa</a>
                                    <small>| </small>
                                </span>
                                 <span class="delete">
                                    <a>Xóa</a>
                                </span>
                            </div>
                        </td>
                        <td>
                            Nam
                        </td>
                        <td>asdas</td>
                        <td>asdasd</td>
                        <td>
                            <span class="ascheckbox checkboxblock checked"
                        data-background="none" 
                        data-ajax="true" 
                        data-href="{{Url('home/block')}}"
                        data-value="1" 
                        data-name="Admin"
                        data-success="block"
                        data-confirm="Bạn có chắc muốn <b>{yes=khóa}</b><b>{no=mở khóa}</b> người dùng {name}?"></span>
                        </td>
                        <td>Đang hoạt động</td>
                        <td></td>
                        <td></td>
                    </tr>

<tr data-block="0">
                        <td><span class="checkboxb ascheckbox center" data-value="1"></span></td>
                        <td>
                            <span>Support</span>
                            <div class="row-action">
                                <span title="Sửa thông tin"><a>Sửa</a>
                                    <small>| </small>
                                </span>
                                 <span class="delete">
                                    <a>Xóa</a>
                                </span>
                            </div>
                        </td>
                        <td>
                            Nam
                        </td>
                        <td>asdas</td>
                        <td>asdasd</td>
                        <td>
                            <span class="ascheckbox checkboxblock"
                        data-background="none" 
                        data-ajax="true" 
                        data-href="{{Url('home/block')}}"
                        data-value="1" 
                        data-name="Admin"
                        data-success="block"
                        data-confirm="Bạn có chắc muốn <b>{yes=khóa}</b><b>{no=mở khóa}</b> người dùng {name}?"></span>
                        </td>
                        <td>Đang hoạt động</td>
                        <td></td>
                        <td></td>
                    </tr>

             </tbody>
          </table>
       </div>
    </div>
    <!--#ttable-->
</div>


@endsection

@section('script')
<script type="text/javascript" src="{{Asset('public/js/t_table.js')}}"></script>
 <script type="text/javascript">
	var currentPage = "#menu_account";
	var subPage = 'list';

	$(document).ready(function(){

		new TTable($("#ttable"),{
			'alert':getAlert,
			'confirm':getConfirm,
			"showcount":function(obj,item){
	            var count = obj.find("table tbody tr[data-block='1']").size();
	            obj.find(".subsubsub li:eq(1) .count").html('(' + count + ')');
	        }
    	});
	});

	</script>
@endsection