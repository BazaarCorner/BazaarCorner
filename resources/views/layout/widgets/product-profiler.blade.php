@foreach($products as $product)
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
                            <span class="text-danger pull-right" ><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span class="text-danger pull-right" ><i class="fa icon-plus-sign" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="double-line"></div>       
            </div>                
            <div class="row-fluid" style="border: solid 1px silver">
                <img src="{{asset($product->image)}}" style="width: 100%; height: 100%;">
                <div style="width: 100%; height:inherit; position: relative; background-color: black; opacity: 0.9;">
                    <div class="row-fluid">
                        <div class="container-fluid">
                            <div class="row" style="text-wrap: inherit;">
                                <div class="col-md-5">
                                    <div class="row-fluid ">
                                        <!-- this design will cater ONLY $X,XXX,XXX.XX color: #C11B17-->
                                        <span class="text-warning" style="font-size: 20px; color: #FFFFFF">{{$product->price}}</span>
                                        <br>
                                        <span class="text-muted" style="text-decoration: line-through;">{{$product->price}}</span>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <!-- cornsilk -->
                                    <span class="text-right pull-right" style="color: #C11B17;">
                                        <!-- item name -->
                                        {{$product->name}}
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"><hr></div>
                    <div id="brand" class="row-fluid text-center">
                            <h6 class="text-uppercase" style="color: #FF4500"> 
                                {{isset($product->brand()->getResults()->name) ? $product->brand()->getResults()->name : ""}}
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