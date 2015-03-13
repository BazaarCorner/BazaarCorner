<div class="container">
    <div class="col-lg-3 col-md-3">
        <div class="row">
            <!--include('widget.banner.inside-bazaar')-->
        </div>
        <div class="row">
            <!-- bazaar collection links -->
            <section class="bazaarcollection"">
                @include('layout.widgets.store-menu')
            </section><!-- end -->
        </div>
    </div>
    
    <div class="col-lg col-md-6">
        <div class="row">
            <a href="/">
                <img class="img-responsive img-center center-block"
                     src="{{asset('assets/img/site/logo.png')}}">
            </a>
        </div>
        <div>
            <!-- search bar -->
             @include('layout.widgets.search')
        </div>    
    </div>
    <!--
    <div class="col-lg-3 col-md-3">
        <div class="row">
            @unless (Auth::check())
            <p class="text-uppercase">
                <a href="{{url('auth/login')}}">Sign In</a>
                <span>/</span>
                <a href="{{url('auth/register')}}">Join us</a>
            </p>
            @endunless
        </div>

        <div class="row" id="wishcart">
            <ul class="list-inline">
                <li>
                    <a href="/wishlist" class="text-uppercase">                
                        <img src="{{asset('img/wishlist.png')}}"> My Wishlist
                    </a>
                </li>
                <li>
                    <a href="/cart" class="text-uppercase">
                        <img src="{{asset('img/cart.png')}}"> My Cart
                    </a>
                </li>
            </ul>
        </div>

        <div class="row" id="garage">
            <div class="pull-left">
                <p class="text-uppercase">
                    <small>Got some cool things to</small>
                    <br>
                    <a href="/garage">
                        <u>Click to sell</u>
                        <span class="caret"></span>
                    </a>
                </p>
            </div>
            <img src="{{asset('img/offer-badge.png')}}">
        </div>
    </div>-->
</div>
