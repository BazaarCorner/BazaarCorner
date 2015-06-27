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
            <h3 class="item-name">{{$product->name}}</h3>
            <h5 class="brand-name">
                @if($product->brand()->getResults())
                    {{$product->brand->getResults()->name}}
                @else
                    &nbsp;&nbsp;
                @endif
            </h5>
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
                    <p>{{$product->description}}</p>
                </div>
                <div id="attributes">
                    <p>{{$product->attributes}}</p>
                </div>
                <div id="shipping-policy">
                    <p>{{$product->shipping}}</p>
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