@extends('layout.site')

@section('meta-name')
    <meta name="description" 
        content="Your top-1 Social E-Commerce. Revolutionize the way you shop">
@stop

@section('page-title')
    <title>Bazaar Corner</title>
    <meta 
        title="BazaarCorner. Your top-1 Social E-Commerce.
            Revolutionize the way you shop">
@stop

@section('content')
<div class="container">
    <div class="row" style="padding-bottom: 10px;">        
        <div class="col-lg-3 col-md-3">
<!--            <div class="row-fluid widget-container">
                include('layout.widgets.featured-merchant')
            </div>
            <div class="row-fluid widget-container">
                include('layout.widgets.most-bought-item')
            </div>
            <div class="row-fluid widget-container">
                include('layout.widgets.top-brand')
            </div>-->
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="row"> @include('layout.widgets.index-banner') </div>
            <div class="row content-holder">
                <div class="col-sm-12 col-md-12">
                    <h4>
                        <strong>Recently Added Stuff</strong>
                        <small class="text-uppercase">({!! $new_items->count() !!} new items)</small>
                    </h4>
                    <div class="container-fluid">
                        <div class="row">
                             @include('site.partial.item-listing', ['products' => $new_items])
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
<!--    <div class="row-fluid content-holder">
        <div class="container-fluid">
            <div class="row" style="background-color: rgb(204,0,51);">
                <img src="{{asset('assets/bazaarcorner/img/site/half_price_shop.png')}}">                
            </div>
            <div class="row">
                 include('layout.widgets.half-price-tag', ['products' => $half_priced])
            </div>
        </div>      
    </div>-->
</div>
@stop
