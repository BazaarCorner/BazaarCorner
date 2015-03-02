<div class="container bazaarfoo">
    <div class="row">
        <section class="bazaarfoos">
            <!-- video playback -->
            <div class="col-sm-12 col-md-3 foo1">
                <div class="clearfix">
                    <div class="pull-left">
                        <p class="text-uppercase">
                            <strong>See how <br> it works</strong>
                        </p>
                    </div>
                    <img class="playvid" src="img/play.png" 
                         alt="Play Bazaar video sale">
                    <br>
                    <a href="#" data-reveal-id="videoModal">
                        <div id="how-it-works">
                            <img src="img/video.png" alt="">
                        </div>
                    </a>
                </div>
            </div><!-- end -->

            <!-- stay connected -->
            <div class="col-sm-12 col-md-3 foo2">
                <p><strong>Stay Connected</strong></p>
                <div class="clearfix">
                    <div class="pull-left">
                        <ul class="soc">
                            <li>
                                <a class="soc-facebook"
                                   href=
                                   "https://www.facebook.com/BazaarCorner2012"
                                   target="_blank"
                                >
                                </a>
                            </li>
                            <li>
                                <a class="soc-twitter soc-icon-last"
                                   href="https://twitter.com/bazaarcorner"
                                   target="_blank"
                                >    
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p class="text-nowrap">bazaarcorner</p><br>
                    <p class="text-nowrap">#bazaarcorner</p>
                </div>
            </div><!-- end -->

            <!-- get updates -->
            <div class="col-sm-12 col-md-3 foo3">
<!--                <p>
                    <strong>
                        Get updates direct to your
                        <span class="text-uppercase">email</span>
                    </strong>
                </p>
                <form method="POST" action="">
                    <div class="form-group">
                        <div class="input-group">
                            <em>
                                <input type="text" class="form-control" 
                                       placeholder="Enter your email here...">
                            </em>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default"
                                       value="Submit">
                            </span>
                        </div>
                    </div>
                </form>-->
                <br><br>
                <p><strong>Types of payment</strong></p>
                <img src="img/payments.png" alt="Type of payments">
            </div><!-- end -->
            
            <!-- copyright links -->
            <div class="col-sm-12 col-md-3 foo4">
                <p>
                    <strong>
                        &COPY; Bazaar Corner 2012 - 
                        <?php echo date('Y'); ?> <br> All rights reserved.
                    </strong>
                </p>
                <ul class="list-unstyled">
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="/get-help">Get Help</a></li>
                    <li>
                        <a href="/shipping-and-returns">Shipping and Returns</a>
                    </li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li>
                        <a href="/terms-and-condition">Terms and Conditions</a>
                    </li>
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul>
            </div><!-- end -->
        </section>
    </div>
</div>

<div id="videoModal" class="reveal-modal">
  <h2>How it Works?</h2>
  <div class="flex-video">
    <iframe width="800" height="315" src="http://www.youtube.com/embed/IkOQw96cfyE" frameborder="0" allowfullscreen></iframe>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>