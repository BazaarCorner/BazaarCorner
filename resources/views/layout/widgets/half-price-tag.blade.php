@foreach ($products as $product)
<div class="col-md-2 col-sm-6 col-xs-12" style="padding: 5px;">
    <div id="product-holder" class="img-thumbnail">
        <div id="item-container">           
            <div class="row-fluid" style="border: solid 1px silver">
                <div id="image-holder">
                    <img src="{{asset($product->image)}}" class="img-center img-responsive">
                </div>       
                <div style="width: 100%; height:inherit; position: relative; background-color: black; opacity: 0.9;">
                    <div class="row-fluid">
                        <div class="container-fluid" style="text-wrap: inherit; font-size-adjust: inherit;">
                            <div class="row">
                                <div class="col-md-5 col-xs-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <!--this design will cater ONLY $X,XXX,XXX.XX color: #C11B17-->
                                            <span class="text-warning" style="color: #FFFFFF">$2,000,000.00</span>
                                        </div>
                                        <div class="col-xs-12">
                                            <span class="text-muted discount" style="text-decoration: line-through;">$35,000,000.00</span>    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xs-12 col-sm-12">
                                     <!--cornsilk--> 
                                    <span class="text-right pull-right" style="color: #C11B17;">
                                         <!--item name--> 
                                        {{$product->name}}
                                    </span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="divider"><hr></div>
                    <div id="brand" class="row-fluid text-center">
                             <!--brand name--> 
                            <h6 class="text-uppercase" style="color: #FF4500">Art Collective - with long brand name</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endforeach

<div class="clearfix"></div>