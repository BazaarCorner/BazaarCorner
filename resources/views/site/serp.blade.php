@extends('layout.site')

@section('content')
<div class="container">
    <div class="col-lg-3 col-md-3">
        <!--include('site.partial.store-category-filter')-->
        <!--include('shop.partial.sidebar-banner')-->
    </div>
    <div class="col-lg-9 col-md-9">
        <div class="row content-holder">
            <div class="col-md-12 col-sm-12">
                @if ($products)
                    <h4>
                        Look what we have in store for: &QUOT;{{$term}}&QUOT;
                        <small class="text-uppercase">({!! $products->count() !!} items found)</small>
                    </h4>
                    <div class="container-fluid">
                        <div class="row">
                             @include('site.partial.item-listing', ['products' => $products])
                        </div>
                    </div>
                @else
                    <h4>Sorry, no item related to: &QUOT;{{$term}}&QUOT;</h4>
                @endif
            </div>
        </div>
        
        
    </div>
</div>
@stop