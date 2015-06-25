@foreach($products as $product)
<a class="item" href="{{route('sku-details', $product->slug)}}">
<div class="col-md-3 col-sm-6 col-xs-12" style="padding: 3px;">
    <div class="img-center img-responsive img-thumbnail">
        <div id="item-container" class="default">
            <div class="row-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ribbon-discount">
                            <!--<span >60% OFF</span>-->
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row-fluid">
                            <!--<span class="text-danger pull-right" ><i class="fa fa-heart" aria-hidden="true"></i></span>-->
                            <!--<span class="text-danger pull-right" ><i class="fa icon-plus-sign" aria-hidden="true"></i></span>-->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="double-line"></div>
            </div>                
            <div class="row-fluid" style="border: solid 1px silver">
                <img src="{{url(env('CDN').$product->display_image)}}" style="width: 194px; height: 194px;" class="img-responsive img-center">
                <div style="width: 100%; height:inherit; position: relative; background-color: black; opacity: 0.9;">
                    <div class="row-fluid">
                        <div class="col-sm-7">
                            <span style="color: cornsilk; font-size: 11px">
                                @if(isset($product->brand()->getResults()->name))
                                    {{str_limit($product->brand()->getResults()->name, 15)}}
                                @else
                                    &nbsp;&nbsp;
                                @endif
                            </span>
                        </div>
                        <div class="col-sm-5"  style="font-size: 11px; text-align: right; color: #FFFFFF">                            
                            @if($product->discount_id > 0)
                            <span> ${{$product->list_price}} </span>
                            <br>
                            <span class="text-muted" style="text-decoration: line-through; font-size: 9px">
                                ${{$product->orig_price}}
                            </span>
                            @else 
                            <span>${{$product->orig_price}}</span>
                            <br>
                            <span class="text-muted"> &nbsp;&nbsp; </span>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="divider"><hr></div>
                    <div id="brand" class="row-fluid text-center">
                            <h6 class="text-uppercase" style="color: #FF4500; font-size: 10px;"> 
                                {{str_limit($product->name, 25)}}
                            </h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</a>
@endforeach