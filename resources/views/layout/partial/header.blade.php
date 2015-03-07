<div class="container">
    <div class="row">
        <!-- inside bazaar -->
        <div class="col-sm-12 col-md-3 bazaar">
            <div class="clearfix">
                @include('widget.banner.inside-bazaar')
                <!-- bazaar collection links -->
                <section class="bazaarcollection"">
                    @include('widget.navigation.header.menu')
                </section><!-- end -->
            </div>
        </div><!-- end -->
        <!-- logo and search form -->
        <div class="col-sm-12 col-md-6 logo">
            @include('widget.site-logo')
            <!-- search bar -->
            @include('widget.search.site')
        </div><!-- end -->
        
        <!-- signin join -->
        <div class="col-sm-12 col-md-3 signins">
            @unless (Auth::check())
            <p class="text-uppercase">
                <a href="{{url('auth/login')}}">Sign In</a>
                <span>/</span>
                <a href="{{url('auth/register')}}">Join us</a>
            </p>
            @endunless
            
            @if (Auth::check())
            <!-- wishlist shopping cart -->
            <section class="wishcart">
                 <ul class="list-inline">
                    <li>
                        <a href="/wishlist">
                            <p class="text-uppercase">
                                <img src="img/wishlist.png" alt="Wishlist icon">
                                My Wishlist
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="/cart">
                            <p class="text-uppercase">
                                <img src="img/cart.png" 
                                     alt="Shopping cart icon">
                                My Cart
                            </p>
                        </a>
                    </li>
                </ul>
            </section>
             <!--click to offer--> 
            <section class="clickoffer">
                <div class="clearfix">
                    <div class="pull-left">
                        <p class="text-uppercase">
                            <small>Got some cool things to</small>
                            <br>
                            <a href="#">
                                <u>Click to sell</u>
                                <span class="caret"></span>
                            </a>
                        </p>
                     </div>
                     <img src="img/offer-badge.png" alt="Offer badge">
                 </div>
            </section>
            @endif
        </div>
    </div>
</div>