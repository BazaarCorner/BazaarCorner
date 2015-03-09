@for ($i=1; $i <= 9; $i++)
<div class="col-md-4 col-sm-6 col-xs-12" style="padding: 5px;">
    <div class="img-center img-responsive img-thumbnail">
        <div id="item-container" class="default">
            <div class="row-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ribbon-discount">
                            <span >60% OFF</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="container-fluid" style="font-size: 18px;">
                            <span class="text-warning pull-right" >new</span>
                            <!--<span class="text-warning pull-right" >popular</span>-->
                            <!--<span class="text-warning pull-right" >new + popular</span>-->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>                    
                <div class="clearfix"></div>
                <div class="double-line"></div>                    
            </div>                
            <div class="row-fluid" style="border: solid 1px silver">
                <img src="{{asset('img/category-items/item0'.$i.'.jpg')}}" style="width: 100%; height: 100%;">
                <div style="width: 100%; height:inherit; position: relative; background-color: black; opacity: 0.9;">
                    <div class="row-fluid">
                        <div class="container-fluid">
                            <div class="row" style="text-wrap: inherit;">
                                <div class="col-md-5">
                                    <div class="row-fluid ">
                                        <!-- this design will cater ONLY $X,XXX,XXX.XX color: #C11B17-->
                                        <span class="text-warning" style="font-size: 20px; color: #FFFFFF">$2,000,000.00</span>
                                        <br>
                                        <span class="text-muted" style="text-decoration: line-through;">$35,000,000.00</span>    
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <!-- cornsilk -->
                                    <span class="text-right pull-right" style="color: #C11B17;">
                                        <!-- item name -->
                                        Donec ut augue quis sem
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"><hr></div>
                    <div id="brand" class="row-fluid text-center">
                            <!-- brand name -->
                            <h6 class="text-uppercase" style="color: #FF4500">Art Collective - with long brand name</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endfor