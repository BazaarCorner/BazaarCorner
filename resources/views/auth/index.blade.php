@extends('layout.settings')

@section('content')
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
@stop