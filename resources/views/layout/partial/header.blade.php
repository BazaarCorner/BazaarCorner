<div class="container">
    <div class="row">
        <!-- inside bazaar -->
        <div class="col-sm-12 col-md-3 bazaar">
            <div class="clearfix">
                <div class="pull-left">
                    <img src="{{asset('img/bazaar.jpg')}}">
                </div>
                <p class="text-nowrap">
                    <span class="text-uppercase bazaartxt">
                        Check out the <em>coolest</em> 
                        <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        Items this season
                    </span>
                    <br> &nbsp; &nbsp;
<!--                    <span class="bazaarmediumtxt">
                        <a href="#" target="">
                            <u>Inside Bazaar</u>
                            <span class="glyphicon glyphicon-play"
                                  aria-hidden="true">
                            </span>
                        </a>
                    </span>-->
                </p>
                <!-- bazaar collection links -->
                <section class="bazaarcollection"">
                    @include('layout.partial.head-menu')
                </section><!-- end -->
            </div>
        </div><!-- end -->

        <!-- logo -->
        <div class="col-sm-12 col-md-6 logo">
            <a href="/">
                <img class="img-responsive center-block" 
                     src="{{asset('img/logo.png')}}">
            </a>
            <p class="tagline text-center">
                <em>
                    Your #1 Social E-Commerce. Revolutionize the way you shop
                </em>
            </p>

            <!-- search bar -->
            <section class="searchbar">
            <form method="POST" action="">
                <div class="form-group">
                    <div class="input-group">
                        <em>
                            <input type="text" class="form-control"
                                   placeholder="Clothing, Decor, Travel etc.">
                        </em>
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-default"
                                   value="Search Here">
                        </span>
                    </div>
                </div>
            </form>
            </section><!-- end -->
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
        </div><!-- end -->
    </div>
</div>