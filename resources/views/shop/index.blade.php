@extends('layout.site')

@section('content')
<div class="container">
    <div class="col-lg-3 col-md-3">
        @include('shop.partial.search-filter')
        @include('shop.partial.sidebar-banner')
    </div>
    <div class="col-lg-9 col-md-9">
        @include('shop.partial.banner')
        @include('shop.partial.item-listing')
    </div>
</div>
@stop