<?php if(strtolower(getenv('APPLICATION_ENV')) == "production") : ?>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T7N3HT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T7N3HT');</script>
    <!-- End Google Tag Manager -->
<?php endif; ?>
    
<script type="text/javascript" src="{{asset('site/js/modernizr.custom.72882.js')}}"></script>

@yield('head-script')