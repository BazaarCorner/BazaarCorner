<div class="col-lg-3 col-md-3">
    <div class="row-fluid">
        <!--include('widget.video.footer')-->
    </div>
</div>

<div class="col-lg-9 col-md-9">
    <div class="row-fluid">
        <div class="col-lg-2 col-md-2">
            <p><strong>Follow us on:</strong></p>            
            <a href="https://www.facebook.com/BazaarCorner2012" 
               target="_blank">
                <i class="fa fa-facebook-square fa-2x tooltips" 
                   data-placement='bottom' data-toogle='tooltip'
                    title='facebook'>
                </i>
            </a>
            <a href="https://twitter.com/bazaarcorner"
                target="_blank"> 
                <i class="fa fa-twitter-square fa-2x tooltips" data-placement='bottom'
                data-toogle='tooltip' title='twitter'></i>
            </a>
            <a href="https://instagram.com/bazaarcorner"
                target="_blank">
                <i class="fa fa-instagram fa-2x tooltips" data-placement='bottom'
                data-toogle='tooltip' title='instagram'></i>
            </a>
<!--            <a href="#"
                target="_blank">
                <i class="fa fa-pinterest-square fa-2x tooltips" data-placement='bottom'
                data-toogle='tooltip' title='pinterest'></i>
            </a>-->
            <div class="clearfix"></div>
        </div>
        <div class="col-lg-10 col-md-10">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <!--include('widget.payment-types')-->
                    <p><strong>Types of payment</strong></p>
                    <i class="fa fa-cc-paypal fa-2x"></i>
                    <i class="fa fa-cc-amex fa-2x"></i>
                    <i class="fa fa-cc-visa fa-2x"></i>
                    <i class="fa fa-cc-mastercard fa-2x"></i>
                    
                </div>
                <div class="col-lg-7 col-md-7">
                    @include('layout.widgets.subscription')
                </div>
            </div>
            <div class="row text-right">
                <!--include('widget.site-footer-links')-->
                <ul class="list-inline">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('help')}}">FAQ</a></li>                    
                    <li><a href="{{route('policy')}}">Our Policy</a></li>
                    <li><a href="{{route('terms')}}">Terms and Conditions</a></li>                    
                </ul>
                <strong class="copyright">
                     Bazaar Corner, Inc. &COPY; 2012 - <?php echo date('Y'); ?>. All rights reserved
                </strong>
            </div>
        </div>
    </div>
</div>