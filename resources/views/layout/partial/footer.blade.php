<div class="col-lg-3 col-md-3">
    <div class="row-fluid">
        @include('widget.video.footer')
    </div>
</div>

<div class="col-lg-9 col-md-9">
    <div class="row-fluid">
        <div class="col-lg-2 col-md-2">
            @include('widget.site-social-links')
        </div>
        <div class="col-lg-10 col-md-10">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    @include('widget.payment-types')
                </div>
                <div class="col-lg-7 col-md-7">
                    @include('widget.site-subscription')
                </div>
            </div>
            <div class="row text-right">
                @include('widget.site-footer-links')
            </div>
        </div>
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


<?php
    $scripts = [
        'js/jquery.default.reveal.min.js',
        'js/bazaarcorner/video.footer.js',
        
        /**
         * Append required scripts here
         */
    ];
?>

@section('footer-inline-script')    
    @foreach($scripts as $script)
        <script type="text/javascript" src="{{asset($script)}}"></script>
    @endforeach
@stop