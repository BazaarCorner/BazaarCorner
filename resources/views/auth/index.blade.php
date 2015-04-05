@extends('layout.site')

@section('content')
<div class="col-md-2">
    
</div>
<div class="col-md-10">
    <div class="content-holder">
        <div class="content-header">
            <div class="container-fluid text-capitalize">
                <div class="pull-left">Account Settings</div>
                <div class="pull-right">
                    <a href="{{url($user['username'])}}"
                       role="button"
                       class="btn btn-danger btn-xs">
                    View Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                Welcome!
            </div>
        </div>
        
    </div>
</div>
@stop