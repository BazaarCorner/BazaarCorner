
<div class="item-badge img-thumbnail" id="item-badge" >
    <div id="border">
        <div class="row status-info">
            <div class="col-md-6 col-xs-6">
                <!-- display if item's discounted -->
                <div class="ribbon-discount">
                    <span>60% OFF</span>
                </div>
                <!-- end display -->                        
            </div>
            <div class="col-md-6 col-xs-6 text-right text-warning">
                <!-- display if item's new and/or popular -->
                <!--<span class="status"> new + popular </span>-->
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="divider"><hr><hr></div>
        <div class="row-fluid item-info"> 
            <div class="image-holder">
                <img src="{{asset('img/category-items/item'.$i.'.jpg')}}" class="img-responsive img-center">
            </div>
            <div class="clearfix"></div>

            <div style="background-color: black; opacity: 0.9;">
                <div class="row-fluid">
                    <div class="container-fluid" style="text-wrap: inherit; font-size-adjust: inherit;">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-6">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <!--this design will cater ONLY $X,XXX,XXX.XX color: #C11B17-->
                                        <span class="text-warning" style="color: #FFFFFF">$xxx.xx</span>
                                    </div>
                                    <div class="col-xs-12">
                                        <span class="text-muted discount" style="text-decoration: line-through;">$cccc.xx</span>    
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-6 col-sm-6">
                                 <!--cornsilk--> 
                                <span class="text-right pull-right" style="color: #C11B17;">
                                     <!--item name--> 
                                    Donec ut augue quis sem
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        </div>                                
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="divider"><hr></div>
                <div id="brand" class="row-fluid text-center">
                         <!--brand name--> 
                        <h6 class="text-uppercase" style="color: #FF4500">
                            Item category - with long brand name
                        </h6>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div> 
</div> <!-- end item-badge -->