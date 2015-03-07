<?php
/**
 * Following scripts are used across site. 
 * Altering the sequence will affect the desired output.
 */
?>

<script type="text/javascript" src="{{asset('assets/jquery/jquery.min.js')}}"> </script>
<script type="text/javascript"src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>


<script type="text/javascript" src="{{asset('js/jquery.hoverIntent.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bazaarcorner/menu.main.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery.default.reveal.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bazaarcorner/video.footer.js')}}"></script>

@yield('inline-script')
