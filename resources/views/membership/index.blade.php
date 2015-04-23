@extends('layout.site')
@section('content')
<div class="col-md-3">
    <div class="row-fluid widget-container">
        @include('membership.profile.info', ['member' => $member['info']])
    </div>
<!--    <div class="row-fluid widget-container">
        include('membership.profile.ranking',['rankings' => $member['rankings']])
    </div>
    <div class="row-fluid widget-container">
        include('membership.profile.feedback', ['feedbacks' => $member['feedbacks']])
    </div>-->
</div>
<div class="col-md-9">
    <!--<div class="row-fluid"></div>-->
    <div class="row">
        @include('site.partial.item-listing', ['filters' => $product['filters'], 'items' => $product['items']])        
    </div>
</div>
@stop