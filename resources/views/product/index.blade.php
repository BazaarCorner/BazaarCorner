@extends('layout.site')

@section('content')
<div class="container">    
    <div class="col-lg-9 col-md-9">
        
    </div>
    <div class="col-lg-3 col-md-3">
        @include('shop.partial.search-filter')
        @include('shop.partial.sidebar-banner')
    </div>
</div>
@stop