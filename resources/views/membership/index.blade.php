@extends('layout.site')
@section('content')
<div class="col-md-3">
    <div class="row-fluid widget-container">
        @include('membership.profile.info', ['member' => $member['info']])
    </div>
    <div class="row-fluid widget-container">
        @include('membership.profile.ranking',['rankings' => $member['rankings']])
    </div>
    <div class="row-fluid widget-container">
        @include('membership.profile.feedback', ['feedbacks' => $member['feedbacks']])
    </div>
</div>
<div class="col-md-9">
    <div class="row-fluid" style="background-image: url('assets/bazaarcorner/img/site/cover.jpg'); background-repeat: no-repeat; background-position: center; max-height: 135px; width:100%; background-size: cover; display: block;">
        <div class="merchant-logo" style="display: block; text-align-last: inherit; padding-top: 35px; padding-left: 10px; background: ">
            <img class="img-center img-responsive img-circle" 
                                src="{{ isset($merchant->logo) ? url(env('CDN').$product->display_image) : asset('assets/bazaarcorner/img/no-image.gif') }}"
                                style="width: 100px; height: 100px;">
        </div>
        <div class="merchant-description" style="background:#cacaca; height: inherit; padding: 10px 0; color: white;">
            <div class="pull-right" style="padding-right: 30px;">
                <button class="btn btn-danger">Follow</button>
            </div>
            <p style="text-align: center;"> </p>
            <div class="clearfix"></div>
        </div>        
    </div>
    <div class="clearfix"></div> 
    <div class="divider"><br><hr></div>
    <div class="row">
        @include('site.partial.item-listing', ['filters' => $product['filters'], 'items' => $product['items']])        
    </div>
</div>
@stop