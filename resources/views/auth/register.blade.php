@extends('layout.site')

@section('meta-name')
    <meta name="description" 
          content="Your top-1 Social E-Commerce. 
          Revolutionize the way you shop">
@stop

@section('page-title')
    <title>Bazaar Corner | User Registration</title>
    <meta title="User Registration">
@stop

@section('content')
<div class="container bazaarlogins">
    <div class="row">
        <!-- welcome splash -->
        <div class="col-sm-12 col-md-7 welcome" style="border: none;">
            <h1 id="fittext1">Create a BazaarCorner Account</h1>
            <h4>We need a tiny amount of information about you.</h4>
            <br>
            <div class="container-fluid">
                <div class="row-fluid">
                {!! Form::open(['url' => 'auth/register']) !!}
                    @if($errors->has())
                    <div class="alert alert-warning">
                         @foreach($errors->all() as $error)
                            <span class="text-danger">* {{$error}}</span><br>
                         @endforeach
                    </div>
                    @endif
                    <div class="form-group">
                        {!! Form::text(
                            'username', //input type
                            '', 
                            [
                                'class' => 'form-control', 
                                'placeholder' => 'Username'
                            ]
                        ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::input(
                            'password', //input type
                            'password', 
                            '',
                            [
                                'class' => 'form-control', 
                                'placeholder' => 'Password'
                            ]
                        ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::input(
                            'password', //input type
                            'password_confirmation', 
                            '',
                            [
                                'class' => 'form-control', 
                                'placeholder' => 'Re-enter to confirm password'
                            ]
                        ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::email(
                            'email', // input type
                            '', 
                            [   // form style
                                'class' => 'form-control', 
                                'placeholder' => 'email@sample.com'
                            ]
                        ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::checkbox('agreed', true, true) !!}
                        <span>
                            I agree with the 
                            <a href="/terms-and-condition" target="_blank">
                                Terms and Condition
                            </a>
                        </span>
                    </div>
                    <div class="form-group">
                        {!! Form::submit(
                            'Join Bazaar!', ['class' => 'btn btn-danger']
                        ) !!}
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div><!-- end -->

        <!-- user login form -->
        <div class="col-sm-12 col-md-5 loginform">
        <br/><br/><br/><br/><br/><br/>
        <center>	
            <h1>Or</h1> 
            <h4>Login using your social account</h4>
            <br/>
            <!-- secure social log in -->
            <section class="securelog02">
                <ul class="list-inline">
                    <li>
                        <a class="btn btn-primary" href="#" role="button">
                            <i class="fa fa-facebook fa-lg"></i>
                            Log in with Facebook
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-info" href="#" role="button">
                            <i class="fa fa-twitter fa-lg"></i>
                            Log in with Twitter
                        </a>
                    </li>
                </ul> 
            </section><!-- end -->					
        </center>
        </div><!-- end -->	 
    </div>
</div>

<div class="container bazaarevo">
    <div class="row">
        <!-- bazaar revolutionize -->
        <div class="col-sm-12 col-md-12"> 
            <div class="clearfix">
                <div class="pull-left">
                    <img class="bazaarlogorevo" 
                         src="{{asset('img/logo-revo.png')}}">
                    <h1 id="fittext2">Join & Shop on Bazaar Community<h1>
                </div>

                <div class="pull-right">
                    <img class="revopic" 
                         src="{{asset('img/stockphoto02.jpg')}}">
                </div>
            </div>
        </div><!-- end -->
    </div>
</div>
@stop

@section('inline-script')
@stop