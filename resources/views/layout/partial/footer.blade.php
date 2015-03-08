<div class="container bazaarfoo">
    <div class="row">
        <section class="bazaarfoos">
            <!-- video playback -->
            <div class="col-sm-12 col-md-3 foo1">
                @include('widget.video.footer')
            </div><!-- end -->
            
            <!-- stay connected -->
            <div class="col-sm-12 col-md-2 foo2">
                @include('widget.site-social-links')
            </div><!-- end -->

            <!-- get updates -->
            <div class="col-sm-12 col-md-4 foo3">
                @include('widget.site-subscription')
                @include('widget.payment-types')
            </div><!-- end -->
            
            <!-- copyright links -->
            <div class="col-sm-12 col-md-3 foo4">
                @include('widget.site-footer-links')
            </div><!-- end -->
        </section>
    </div>
</div>

<!-- hidden -->
<div id="videoModal" class="reveal-modal">
  <h2>How it Works?</h2>
  <div class="flex-video">
    <iframe width="800" height="315" 
            src="http://www.youtube.com/embed/IkOQw96cfyE" 
            frameborder="0" allowfullscreen>
    </iframe>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>

@section('footer-inline-script')    
<script type="text/javascript" src="{{asset('js/jquery.default.reveal.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bazaarcorner/video.footer.js')}}"></script>
@stop