@extends('fontend.layout_qc')
@section("box_center")
<style>
    .title
    {
            background: red;
    color: white;
    font-weight: bold;
    text-align: center;
    border-radius: 6px;
    text-transform: uppercase;
    padding: 8px;
    }
</style>
<div class="box_sales">
            @if(count($page)>0)
            <h1 class="title">{!!$page[0]->title!!}</h1>
                {!!$page[0]->content!!}
            @endif
          </div> 
@endsection