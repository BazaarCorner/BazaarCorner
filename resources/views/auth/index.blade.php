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
                <div class="pull-left">Account Settings</div>
                <div class="pull-right">
                    <a href="{{url($user->username)}}"
                       target="_blank"
                       role="button"
                       class="btn btn-danger btn-xs">
                    View Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                @if ($user->is_merchant || $user->is_reseller)
                    @include('auth.form.merchant.information')
                @else               
                    @include('auth.form.customer.information')   
                @endif
            </div>
        </div>
        
    </div>
</div>
@stop