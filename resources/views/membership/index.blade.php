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
    <div class="row-fluid">
       <div>
        <style>
            .circular{background: url(assets/img/sample/sellers/thumb-avatar/1.jpg) no-repeat;}
        </style>
        <div class="circular"></div>
        <style>
            .cover-photo{background: url(assets/img/site/cover.jpg) no-repeat;}
        </style>
        <div class="cover-photo"></div>
        <div class="cover-photo-bottom">
            <div class="row" style="padding-top:13px">
                <div class="col-md-3"></div>
                <div class="col-md-7">
                    <span class="span3">Hi guys, It’s great to have you drop by. Donec facilisis, odio eu pellentesque auctor, arcu quam lacinia nulla, a vestibulum libero urna in sem. </span>
                </div>
                <div class="tcol-md-2">
                    <!--<a href="#" class="follow-button">Follow</a>-->
                </div>
            </div>
        </div>        
        </div>
    </div>
    <div class="row">
        @include('site.partial.item-listing', ['filters' => $product['filters'], 'items' => $product['items']])        
    </div>
</div>
@stop