<?php
$meta_name = "description";
$meta_content = "Your top-1 Social E-Commerce. Revolutionize the way you shop";
$meta_title = "BazaarCorner. Your top-1 Social E-Commerce."
    . " Revolutionize the way you shop";

$page_title = "Bazaar Corner";

$link_rel_type = 'rel=stylesheet type=text/css';
?>

@extends('layout.site')

@section('meta-name')
    <meta name="{{$meta_name}}" content="{{$meta_content}}">
@stop

@section('page-title')
    <title>{{$page_title}}</title>
    <meta title="{{$meta_title}}">
@stop

@section('head-link')
    <link {{$link_rel_type}} href="{{asset('css/normalize.min.css')}}" />
    <link  
          href="css/jquery.jscrollpane.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/etalage.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.override.css">
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="row">
                @include('widget.user.details')
            </div>
            <div class="row">
                @include('widget.user.rankings')
            </div>
            <div class="row">
                @include('widget.user.feedback')
            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="row">
                @include('widget.user.banner')
            </div>
            <div class="row-fluid">
                @include('profile.partial.item-listing')
            </div>
        </div>
    </div>
</div>
@stop

@section('inline-script')
    <!--<script src="{{asset('js/default.min.js')}}"></script>-->
    <script src="js/app.js"></script>
    <script src="js/default4.min.js"></script>
    <script src="js/jquery.default.reveal.min.js"></script>
    <script src="js/jquery.default.forms.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    
    <script>
        $(function(){
            $("div.divfeedbacks").slice(0, 10).show(); // select the first ten
            $("#load").click(function(e){ // click event for load more
                e.preventDefault();
                $("div.divfeedbacks:hidden").slice(0, 5).show(); // select next 10 hidden divs and show them
                if($("div.divfeedbacks:hidden").length == 0){ // check if any hidden divs still exist
                    //alert("No more divs"); // alert if there are none left
                    $("div.alert-box:hidden").show(); // select next 10 hidden divs and show them
                    $("#load").hide(); // select next 10 hidden divs and show them
                }
            });
        });
    </script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/facescroll/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="js/facescroll/facescroll.min.js">
/***********************************************
* FaceScroll custom scrollbar (c) Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/
</script>

<script type="text/javascript">
	$(document).ready(function(){ // on page DOM load
		$('.feedback-scroll').alternateScroll({ 'vertical-bar-class': 'styled-h-bar', 'hide-bars': false });	
	})
</script>

<script src="js/jquery.etalage.min.js"></script>
<script>
        $(document).ready(function(){

                $('#example3').etalage({
                        smallthumbs_position: 'left'
                });

        });
</script>
@stop