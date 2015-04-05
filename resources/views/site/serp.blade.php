@extends('layout.site')

@section('content')
<div class="container">
    <div class="col-lg-3 col-md-3">
        <!--include('site.partial.store-category-filter')-->
        <!--include('shop.partial.sidebar-banner')-->
    </div>
    <div class="col-lg-9 col-md-9">
        <h1>Look what we have in store for: &QUOT;{{$term}}&QUOT;</h1>
    </div>
</div>
@stop