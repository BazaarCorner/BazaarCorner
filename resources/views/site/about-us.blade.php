@extends('layout.site')

@section('meta-name')
<meta name="description" 
      content="
        Bazaar Corner is an virtual market place where people and merchants can
        share and sell products online. A platform where it connects merchants,
        individual botiques, brands and consumers with an amazing taste on the
        coolest products.
      ">
@stop

@section('page-title')
    <title>Bazaar Corner - About Us</title>
    <meta title="Bazaar Corner - About Us">
@stop

@section('content')
<div class="col-md-9 text-justify">
    <section id="about">
        <h3>About Us</h3>
        <p>
            <strong>Bazaar Corner, Inc.</strong> is an virtual market place where people and merchants
            can share and sell products online. A platform where it connects
            merchants, individual boutiques, brands and consumers with an
            amazing taste on the coolest products.
        </p>
    </section>
    <section id="mission-vision">
        <h3>We love to connect merchants and consumers</h3>
        <p>
            Our main mission is to revolutionize they way people shop online,
            unlocking individuals' potential in selling. Making it as the safest
            e-commerce in world and making it more socialize and easy to use. 
        </p>
    </section>
<!--    <section id="contact">
        <h3>Contact Us</h3>
        {!! Form::open() !!}
            <div class="form-group">
                {!! Form::text('') !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('') !!}
            </div>
        {!! Form::close() !!}
    </section>-->
</div>
<div class="col-md-3">
    <div class="affix">
        <h4>Get to know: </h4>
        <ul>
            <li><a href="#about">The Company</a></li>
            <li><a href="#mission-vision">Our Mission and Vission</a></li>
            <!--<li><a href="#contact">Contact Us</a></li>-->
        </ul>
    </div>    
</div>
@stop

@section('content-inline-script') @stop