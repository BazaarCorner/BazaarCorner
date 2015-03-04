@extends('layout.site')

@section('meta-name')
    <meta name="description" 
          content="Your top-1 Social E-Commerce. Revolutionize the way you shop"
    >
@stop

@section('page-title')
    <title>Bazaar Corner</title>
    <meta 
        title="BazaarCorner. Your top-1 Social E-Commerce.
            Revolutionize the way you shop">
@stop

@section('head-link')
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/etalage.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.override.css">
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                @include('layout.widget.user-details')
            </div>
            <div class="row">
                @include('layout.widget.user-rankings')
            </div>
            <div class="row">
                @include('layout.widget.user-feedback')
            </div>
        </div>
        
    </div>
</div>
@stop

@section('inline-script')
    <script>
        document.write('<script src=js/vendor/' +
        ('__proto__' in {} ? 'zepto.min' : 'jquery') +
        '.js><\/script>')
    </script>
    <script src="js/default.min.js"></script>
    <!--<script src="assets/jquery/jquery.js"></script>-->
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
<!--RECENT FEEDBACKS END-->


<!--FACESCROLL START-->

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
<!--FACESCROLL END-->

<script src="js/jquery.etalage.min.js"></script>
<script>
        $(document).ready(function(){

                $('#example3').etalage({
                        smallthumbs_position: 'left'
                });

        });
</script>
@stop