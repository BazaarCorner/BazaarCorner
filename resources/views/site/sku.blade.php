@extends('layout.site')
@section('content')
<div class="container">
    <div class="row-fluid">
        <div class="col-md-5" style="padding: 5px">
            <div class="col-sm-2">
                <img style="border: 1px solid silver;"
                     class="img-responsive" 
                     src="{{url(env('CDN').$product->display_image)}}"
                     >
            </div>
            <div class="col-sm-10">
                <img class="img-responsive img-thumbnail" 
                     src="{{url(env('CDN').$product->display_image)}}"
                     >
            </div>
        </div>
        <div class="col-md-7">
            @if($product->discount_id > 0)
            <div  style="background-image: url('../assets/bazaarcorner/img/site/icons/ribbon-discount-reverse.png'); background-repeat: no-repeat; background-position: right; text-align: right; color: #FFFFFF; font-size: 14px;">
                <span style="padding-right: 5px;">{{ (int) $product->discount()->getResults()->rate }}% OFF</span>
            </div>
            @endif
            <h3 class="item-name">{{$product->name}}</h3>
            <h4 class="brand-name">
                <a href="{{route('member', [$product->merchant()->getResults()->slug])}}">{{$product->merchant()->getResults()->name}}</a>
            </h4>
            <h3> 
                @if($product->discount_id > 0)
                    <span class="text-success">$&nbsp;{{$product->list_price}}</span>
                    <small class="text-muted" style="text-decoration: line-through;">
                        ${{$product->orig_price}}
                    </small>
                @else
                    $&nbsp;{{$product->orig_price}}
                @endif
            </h3>
            <div id="tabs">
                <ul>
                    <li><a href="#description">Description</a></li>
                    <li><a href="#attributes">Product Attributes</a></li>
                    <li><a href="#shipping-policy">Shipping Policy</a></li>
                </ul>
                <div id="description">
                    {!! $product->description !!}
                </div>
                <div id="attributes">
                    {!! $product->attributes !!}
                </div>
                <div id="shipping-policy">
                    {!! $product->shipping !!}
                </div>
            </div>            
        </div>
    </div>
</div>
@stop

@section('head-link')
    <link type="text/css" rel="stylesheet" media="screen" href="{{asset('/assets/jquery-ui/themes/blitzer/jquery-ui.min.css')}}">
    <link type="text/css" rel="stylesheet" media="screen" href="{{asset('/assets/jquery-ui/themes/blitzer/theme.css')}}">
@stop

@section('content-inline-script')
<script type="text/javascript"src="{{asset('assets/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript"src="{{asset('assets/jquery-ui/ui/tabs.js')}}"></script>
<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>
@stop