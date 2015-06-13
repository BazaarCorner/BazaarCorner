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
    <div class="row-fluid" style="background-image: url('assets/bazaarcorner/img/site/cover.jpg'); background-repeat: no-repeat; background-position: center;">
        <div class="merchant-logo" style="height: 150px; position: inherit; display: block; text-align-last: inherit;">
<!--            <img class="img-center img-responsive img-circle" 
                                src="{{ isset($merchant->logo) ? url(env('CDN').$product->display_image) : asset('assets/bazaarcorner/img/no-image.gif') }}"
                                style="width: 80px; height: 80px;">            -->
        </div>
        <div class="merchant-description">
            
        </div>
    </div>
    <div class="row">
        @include('site.partial.item-listing', ['filters' => $product['filters'], 'items' => $product['items']])        
    </div>
</div>
@stop