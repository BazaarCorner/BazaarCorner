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
    <div class="row">
        
        <div class="col-lg-3 col-md-3">
            <div class="container-fluid">                
                <div class="row"> @include('widget.merchant.featured') </div>
                <div class="row"> @include('widget.item.most-bought') </div>
                <br>
                <div class="row"> @include('widget.item.top-brand') </div>
            </div>
        </div>
        
        <div class="col-lg-9 col-md-9">
            <div class="row"> @include('widget.banner.index-page') </div>
            <div class="divider"><br><br></div>
            <div class="row-fluid" style="box-shadow: 0px 0px 1px silver;">
                <div class="container-fluid">
                    <h4 class="pull-left"><strong>Recently Added Stuff</strong></h4>
                    <a class="pull-right view-more" href="{{url(route('serp'), "new")}}">
                        View More
                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                    </a>
                    <nav>
                        <ul class="pagination">
                            <li><a href="#" class="page-active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" aria-label="Next">Next</a></li>
                        </ul>
                    </nav>
                    <div class="divider"><hr></div>
                </div>
                <div class="row-fluid" >
                    <div class="col-lg-12 col-md-12">
                        @include('widget.item.recently-added')
                        <div class="divider"><p></p></div>
                    </div>
                    
                </div>
                    <div class="divider"><hr></div>
                    <nav>
                        <ul class="pagination">
                            <li><a href="#" class="page-active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" aria-label="Next">Next</a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
            </div>
            
        </div>
    </div>
    
    <div class="divider"><br><br></div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="half-price">
                <img src="{{asset('img/half_price_shop.png')}}">
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