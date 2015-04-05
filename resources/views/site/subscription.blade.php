@extends('layout.site')

@section('content')
<div class="container">
    <div class="row-fluid">
        <h1>Thank you for subscribing!</h1>
        <p>
            You will be automatically redirected to our home page in 5 seconds 
            or click <a href="/"> here </a>.
        </p>
    </div>
    <div class="row text-center">
        <hr>
        <span class="text-lowercase text-muted">Advertisement here</span>
        <hr>        
    </div>
</div>
@stop

@section('content-inline-script')
<script type="text/javascript">
    $(document).ready(function() {
        window.setTimeout(
            function(){window.location.href = "/"},
            5000   //5 second duration
        );
    });
</script>
@stop