<!--<link href="{{asset('img/favicon.ico')}}" rel="shortcut icon">
<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" media="screen" 
    rel="stylesheet" type="text/css">
<link href="{{asset('assets/bootstrap/css/bootstrap-theme.min.css')}}" media="screen" 
    rel="stylesheet" type="text/css">
<link href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}" media="screen" 
    rel="stylesheet" type="text/css">
<link href="{{asset('css/style.css')}}" media="screen" rel="stylesheet" type="text/css">-->

<?php

$styles = [
    'assets/bootstrap/css/bootstrap.min.css',
    'assets/bootstrap/css/bootstrap-theme.min.css',
    '/assets/font-awesome/css/font-awesome.min.css',
    'css/style.css',
    'css/style.override.css',
];
?>

@foreach ($styles as $style)
<link type="text/css" rel="stylesheet" media="screen" href="{{asset($style)}}">
@endforeach


@yield('head-link')