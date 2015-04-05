<ul class="menu-category list-inline">
    @foreach($stores as $store)
    <li>
        <a href="{{route('shops', $store->slug)}}">
            {{$store->name}}
        </a>
    </li>
    @endforeach
</ul>

<!--<ul id="menu">
    <li class="mega" style="box-shadow: 1px 2px 5px silver; display: block; padding: 5px 0px;">
        <div class="row-fluid text-center">
            <h4><a href="{{route('shops')}}">Store Category&nbsp;&nbsp;<span class="caret"></span></a></h4>
        </div>
        <div id="menu-container">
            <div style="background-color: #cc0033; width: 100%; height:6px"></div>
            <div class="row">
                <div class="col-md-7 col-sm-7" style="border-right: #cecece 1px solid">
                    <ul class="menu-category">      
                        @foreach($stores as $store)
                        <li>
                            <a href="{{route('shops',[$store->slug])}}">
                                {{$store->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>-->
<!--                <div class="col-md-4 col-sm-4">
                    <ul class="menu-other" style="margin-top: 10px">
                        <li>
                            <span class="span3">Featured:</span><br/>
                            <a href="#">Products</a>&nbsp;&nbsp;&nbsp;<a href="#">Merchants</a>
                        </li><br />
                        <li>
                            <span class="span3">Big Discounts:</span><br/>
                            <a href="#">Half the tag price</a>&nbsp;&nbsp;&nbsp;<a href="#">Most Bought</a>
                        </li><br />
                        <li>
                            <span class="span3">Latest:</span><br/>
                            <a href="#">Products</a>&nbsp;&nbsp;&nbsp;<a href="#">Merchants</a>
                            <a href="#">Articles</a>&nbsp;&nbsp;&nbsp;<a href="#">News & Updates</a>
                        </li><br />
                    </ul>
                    <br />
                    <a href="#"  data-reveal-id="videoModal"><div id="how-it-works-menu" style="position: relative;left: 25px">See how BazaarCorner works</div></a>
                </div>-->
<!--                <div class="col-md-5 col-sm-5">
                    <div style="
                         z-index: 2;
                         width:400px; 
                         position: 
                         relative;bottom:9px">
                        <img src="{{asset('img/modules/inside-bazaar-model.png')}}" 
                             style="width:400px; 
                             position: relative" />
                        <a href="#"></a>
                    </div>
                </div>-->
<!--          </div>
        </div>
    </li>
</ul>-->