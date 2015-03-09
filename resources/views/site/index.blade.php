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
    <div class="row" style="padding-bottom: 50px;">
        <div class="col-md-9 col-sm-9">
            <div class="container-fluid" style="padding-bottom: 30px;">
                <div class="row"> @include('widget.banner.index-page') </div>
            </div>
            <div class="row">
                 @include('widget.item.recently-added') 
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="container-fluid">                
                <div class="row"> @include('widget.merchant.featured') </div>
                <div class="row"> @include('widget.item.most-bought') </div>
                <br>
                <div class="row"> @include('widget.item.top-brand') </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="half-price">
                <img src="img/half_price_shop.png">
                <a class="pull-right view-more" href="/item/search?q=half+priced">
                    SHOP NOW 
                    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                </a>
            </div>
            <div class="row-fluid">
                @include('widget.item.half-price-tag')
            </div>
        </div>
    </div>
</div>
@stop

@section('content-inline-script') @stop