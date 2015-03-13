<<<<<<< HEAD:resources/views/widget/item/recently-added.blade.php
<div class="row-fluid">

@for ($i=1; $i < 7; $i++)
<div class="col-lg-3 col-md-3" style="padding: 5px;">
    
    <!-- include(layout.partial.item-banner) -->
    
    <div class="item-badge img-thumbnail" id="item-badge" >
            <div id="border">                
                <div class="row status-info">
                    <!--<div class="col-md-6 col-xs-6 pull-left">-->
                        <!-- display if item's discounted -->
<!--                        <div class="ribbon-discount">
                            <span>60% OFF</span>
                        </div>-->
                        <!-- end display -->                        
                    <!--</div>-->
                    <div class="col-md-6 col-xs-6 pull-right text-right text-warning">
                        <!-- display if item's new and/or popular -->
                        <span class="status"> new </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="divider"><hr><hr></div>
                <div class="row-fluid item-info">                    
                    <div class="image-holder">
                        <img src="{{asset('img/recent_stuff/item'.$i.'.jpg')}}" class="img-responsive img-center">
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
                                                <span class="text-muted discount" 
                                                      style="text-decoration: line-through;">
                                                    $xxxx.xx
                                                </span>    
                                            </div>
                                            <div class="clearfix"></div>
=======
@for ($i=4; $i <= 9; $i++)

<div class="col-md-2 col-sm-6 col-xs-12" style="padding: 5px;">
    <div id="product-holder" class="img-thumbnail">
        <div id="item-container">           
            <div class="row-fluid" style="border: solid 1px silver">
                <div id="image-holder">
                    <img src="{{asset('img/category-items/item0'.$i.'.jpg')}}" class="img-center img-responsive">
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
>>>>>>> fix-layout:resources/views/layout/widgets/half-price-tag.blade.php
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xs-6 col-sm-6">
                                         <!--cornsilk--> 
                                        <span class="text-right pull-right" style="color: #C11B17;">
                                             <!--item name--> 
                                            Item Name {{$i}}
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
                                <h6 class="text-uppercase" style="color: #FF4500">Art Collective - with long brand name</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>    
                </div>    
            </div>            
        </div> <!-- item-badge -->
    
</div>
@endfor

<div class="clearfix"></div>
