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
    <div class="row">
        <div class="col-md-8">
            <h3>Would you love to sell your products here at Bazaar Corner?</h3>
            <p>
                Join our community of known merchants and resellers by creating
                your <strong class="text-warning">FREE*</strong> account now.
            </p>
        </div>
        <div class="col-md-4" style="border-left: 1px solid silver">
            <h3>I'm a Buyer 
                <small class="text-warning">
                    (<strong>FREE account</strong>)
                </small>
            </h3>
            <p>I would like to join the Bazaar Corner community</p>
            @include('auth.form.customer.registration')
            <h4>Have an existing account?</h4>
            <a href="{{url('member/login')}}">Click here to sign in</a>
            <div class="clearfix"></div>
            <?php // echo $this->partial('template/partial/socials', []); ?>  
        </div>
    </div>
</div>
@stop

@section('inline-script')
@stop