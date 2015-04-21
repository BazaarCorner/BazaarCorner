@extends('layout.site')

@section('head-link')
    <link type="text/css" rel="stylesheet" media="screen" href="{{asset('/assets/bazaarcorner/css/navigation.css')}}">
@stop

@section('content')
<div class="col-md-2">
    @include('auth.navigation.sidebar')
</div>
<div class="col-md-10">
    <div class="content-holder">
        <div class="content-header">
            <div class="container-fluid text-capitalize">
                <div class="pull-left">Catalog Dashboard</div>
            </div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                Welcome to Catalog Dashboard!
            </div>
        </div>        
    </div>
</div>
@stop