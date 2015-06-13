<?php

$styles = [
    'bootstrap/css/bootstrap.min.css',
    'bootstrap/css/bootstrap-theme.min.css',
    'font-awesome/css/font-awesome.min.css',
    'bazaarcorner/css/layout.css',
    'bazaarcorner/css/widgets.css',
    'bazaarcorner/css/navigation.css',
    'bazaarcorner/css/override.css',
    'bxslider/jquery.bxslider.css',
];
?>

@foreach ($styles as $style)
<link type="text/css" rel="stylesheet" media="screen" href="{{asset('/assets/'.$style)}}">
@endforeach


@yield('head-link')