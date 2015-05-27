@foreach($products as $product)
<div class="col-md-4 col-sm-6 col-xs-12" style="padding: 5px;">
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
                            <!--<span class="text-danger pull-right" ><i class="fa fa-star" aria-hidden="true"></i></span>-->
                            <!--<span class="text-danger pull-right" ><i class="fa icon-plus-sign" aria-hidden="true"></i></span>-->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="double-line"></div>       
            </div>                
            <div class="row-fluid" style="border: solid 1px silver">
                <img src="{{url(env('CDN').$product->images()[0]->name)}}" style="width: 100%; height: 100%;">
                <div style="width: 100%; height:inherit; position: relative; background-color: black; opacity: 0.9;">
                    <div class="row-fluid">
                        <div class="container-fluid">
                            <div class="row" style="text-wrap: inherit;">
                                <div class="col-md-8">
                                    <!-- cornsilk -->
                                    <span style="color: #C11B17; font-size: 10px;">
                                        <!-- item name -->
                                        {{$product->sku}}                                        
                                    </span>
                                    <br>
                                    <span style="color: cornsilk; font-size: 12px">
                                        {{isset($product->brand()->getResults()->name) ? $product->brand()->getResults()->name : ""}}
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <div class="row-fluid ">
                                        <!-- this design will cater ONLY $X,XXX,XXX.XX color: #C11B17-->
                                        <span class="text-warning" style="font-size: 15px; color: #FFFFFF">${{$product->price}}</span>
                                        <br>
                                        <!--<span class="text-muted" style="text-decoration: line-through; font-size: 12px">{{$product->price}}</span>-->
                                    </div>
                                </div>                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"><hr></div>
                    <div id="brand" class="row-fluid text-center">
                            <h6 class="text-uppercase" style="color: #FF4500; font-size: 15px;"> 
                                {{str_limit($product->name, 20)}}
                            </h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endforeach