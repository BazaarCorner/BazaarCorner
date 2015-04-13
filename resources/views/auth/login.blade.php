@extends('layout.site')

@section('meta-name')
<!--    <meta name="description" 
          content="Your top-1 Social E-Commerce. 
          Revolutionize the way you shop">-->
@stop

@section('page-title')
    <title>Bazaar Corner | Login</title>
    <!--<meta title="User Login">-->
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>I already have an account</h3>            
            <p>I would like to sign in with my account.</p>
            @include('auth.form.login')
            <h4>Don't have an account?</h4>
            <a href="{{url('member/register')}}">
                Click here to register (it's FREE)
            </a>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8" style="border-left: 1px solid silver">
            @include('layout.widgets.index-banner')
            <div class="divider"><hr><br><br></div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="pull-left">
                        <img class="bazaarlogorevo" 
                            src="{{url('assets/bazaarcorner/img/site/logo-revo.png')}}">
                        <h2 id="fittext2">Revolutionize the way you shop!</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="pull-right">
                        <img class="revopic" 
                            src="{{url('assets/bazaarcorner/img/site/stockphoto02.jpg')}}">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@stop

@section('inline-script')
@stop