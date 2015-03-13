<<<<<<< HEAD:resources/views/widget/item/product-profile.blade.php

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
=======
@for ($i=1; $i <= 9; $i++)
<div class="col-md-3 col-sm-6 col-xs-12" style="padding: 5px;">
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
>>>>>>> fix-layout:resources/views/layout/widgets/product-profiler.blade.php
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
