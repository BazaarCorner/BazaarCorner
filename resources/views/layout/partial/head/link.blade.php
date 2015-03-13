<?php

$styles = [
    'bootstrap/css/bootstrap.min.css',
    'bootstrap/css/bootstrap-theme.min.css',
    'font-awesome/css/font-awesome.min.css',
    'css/layout.css',
//    'css/style.widgets.css',
];
?>

@foreach ($styles as $style)
<link type="text/css" rel="stylesheet" media="screen" href="{{asset('/assets/'.$style)}}">
@endforeach


@yield('head-link')