@extends('layout.site')

@section('content')
<div class="container">
    <div class="row-fluid">
        <div class="col-md-5" style="padding: 5px">
            <div class="col-sm-2">
                <img style="border: 1px solid silver; width: 50px; height: 50px;"
                     class="img-center img-responsive" 
                     src="{{url(env('CDN').$product->display_image)}}"
                     >
            </div>
            <div class="col-sm-10">
                <img class="img-center img-responsive img-thumbnail" 
                     src="{{url(env('CDN').$product->display_image)}}"
                     style="width: 450px; height: 500px;">
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
            <p>
                {{$product->description}}
            </p>
        </div>
    </div>
</div>
@stop
