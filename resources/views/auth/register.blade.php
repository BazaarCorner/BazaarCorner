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
<div class="container">
    <div class="row-fluid">
        @if($errors->has())
            <div class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <span class="text-danger">* {{$error}}</span><br>
                @endforeach
            </div>
        @endif
    </div>
    <div class="row">
<!--        <div class="col-md-12">
            <h3>Would you love to sell your products here at Bazaar Corner?</h3>
            <p>
                Join our community of known merchants and resellers by creating
                your <strong class="text-warning">FREE*</strong> account now.
            </p>
            include('auth.form.merchant.registration')
        </div>-->
        <div class="col-md-12">
            <h3>I'm a Buyer 
                <small class="text-warning">
                    (<strong>FREE account</strong>)
                </small>
            </h3>
            <p>I would like to join the Bazaar Corner community</p>
            @include('auth.form.customer.registration')
            <div class="clearfix"></div>
            <?php // echo $this->partial('template/partial/socials', []); ?>  
        </div>
    </div>
    <div class="row-fluid">
        <div class="row-fluid" style="font-weight: bold;">
            By submitting the registration form, you are acknowledging our
            <a href="{{route('terms') . '#buyer'}}"
               class="text-capitalize"
               target="_blank">
                Terms
            </a>
        </div>
        <h4>
            Have an existing account?
            <small>
                 <a href="{{url('member/login')}}">click here to sign in</a>
            </small>
        </h4>
        <em class="text-muted" style="font-size: 11px;">
            ** We value your information. Read more about our
            <a href="{{route('policy') . '#membership'}}"
               class="text-capitalize"
               target="_blank">
                Privacy policy
            </a>
        </em>
    </div>
</div>
@stop

@section('inline-script')
@stop