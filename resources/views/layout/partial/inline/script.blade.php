<?php
/**
 * GLOBAL SCRIPTS
 * 
 * Following scripts are used across site. Altering the sequence will affect the desired output.
 */
?>
<script type="text/javascript" src="{{asset('assets/jquery/jquery.min.js')}}"> </script>
<script type="text/javascript"src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

@yield('header-inline-script')
@yield('content-inline-script')
@yield('footer-inline-script')
