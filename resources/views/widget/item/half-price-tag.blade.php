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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xs-12 col-sm-12">
                                     <!--cornsilk--> 
                                    <span class="text-right pull-right" style="color: #C11B17;">
                                         <!--item name--> 
                                        Donec ut augue quis sem
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

@endfor

<div class="clearfix"></div>

<!--
@foreach($items as $item)
    <div class="col-md-3 col-sm-6">
        <div class="item-wrap">
            <div id="wrap">
                <img src="{{$item['logo']}}" 
                     style="width: 100%; height: 100%;">
                <div id="text-hover">
                    <a href="/product/{{$item['name']}}" 
                       class="item-name">
                        {{$item['name']}}
                    </a>
                    <span class="item-price">
                        &#36; {{$item['current_price']}}
                    </span>
                    <span class="add-to-cart">
                        <a class="btn btn-default"
                           href="#"
                        >
                            Add to cart
                        </a>
                    </span>
                    <span class="social-media">
                        <a href="#">
                            <img src="img/fb.jpg">
                        </a>
                        <a href="#">
                            <img src="img/twitter.jpg">
                        </a>
                        <a href="#">
                            <img src="img/pin.jpg">
                        </a>
                    </span>
                    <span class="category">
                        Category: 
                        <a href="/category/{{$item['category']}}">
                            {{$item['category']}}
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <hr>
        <div class="item-description">
            <h4>{{$item['name']}}</h4>
            <p>{{$item['description']}}</p>
        </div>
    </div>
@endforeach
-->