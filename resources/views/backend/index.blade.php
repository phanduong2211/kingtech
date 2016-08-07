@extends('backend.layout')
@section('title','Admin Control Panel')

@section('breadcrumb')
<h2>Trang Chủ</h2>
@endsection

@section('css')

@endsection

@section('content')
<div class="row">
	<!--box-->
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-cube fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{$data->sanpham}}</div>
						<div>Sản phẩm</div>
					</div>
				</div>
			</div>
			<a href="{{url('admin/product')}}">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<!--//box-->
	<!--box-->
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-globe fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{$data->tintuc}}</div>
						<div>Tin tức</div>
					</div>
				</div>
			</div>
			<a href="{{url('admin/news')}}">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<!--//box-->

	<!--box-->
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-list fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{$data->menu}}</div>
						<div>Menu</div>
					</div>
				</div>
			</div>
			<a href="{{url('admin/menu')}}">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<!--//box-->

	<!--box-->
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-picture-o fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{$data->slide}}</div>
						<div>Slideshow</div>
					</div>
				</div>
			</div>
			<a href="{{url('admin/slide')}}">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<!--//box-->

</div>

<style type="text/css">
	.panel .huge{
		font-size: 30px;
	}
</style>

@endsection

@section('script')

@endsection