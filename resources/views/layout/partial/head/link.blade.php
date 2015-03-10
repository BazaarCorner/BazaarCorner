<?php

$styles = [
    'assets/bootstrap/css/bootstrap.min.css',
    'assets/bootstrap/css/bootstrap-theme.min.css',
    'assets/font-awesome/css/font-awesome.min.css',
    'css/style.css',
    'css/style.override.css',
    'assets/bazaar/css/product_badge.css',
];
?>

@foreach ($styles as $style)
<link type="text/css" rel="stylesheet" media="screen" href="{{asset($style)}}">
@endforeach


@yield('head-link')