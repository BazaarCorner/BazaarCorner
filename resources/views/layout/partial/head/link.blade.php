<?php

$styles = [
<<<<<<< HEAD
    'assets/bootstrap/css/bootstrap.min.css',
    'assets/bootstrap/css/bootstrap-theme.min.css',
    'assets/font-awesome/css/font-awesome.min.css',
    'css/style.css',
    'css/style.override.css',
    'assets/bazaar/css/product_badge.css',
=======
    'bootstrap/css/bootstrap.min.css',
    'bootstrap/css/bootstrap-theme.min.css',
    'font-awesome/css/font-awesome.min.css',
    'css/layout.css',
//    'css/style.widgets.css',
>>>>>>> fix-layout
];
?>

@foreach ($styles as $style)
<link type="text/css" rel="stylesheet" media="screen" href="{{asset('/assets/'.$style)}}">
@endforeach


@yield('head-link')