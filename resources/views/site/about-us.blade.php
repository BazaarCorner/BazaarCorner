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
    <section id="contact-information">
        <h3>Contact Information</h3>
        <div class="col-md-6">
            <h4>
                <a href="mailto:info@bazaarcorner.com">
                    Support Team
                </a>
            </h4>
            <p>Get in touch with our 24/7 support team.</p>
            <br>
            <h4>
                <a href="mailto:info@bazaarcorner.com">
                    Development Team
                </a>                
            </h4>
            <p>Concerns about the security or any site functionality.</p>
            <br>
            <h4>
                <a href="mailto:dennis@bazaarcorner.com">
                    Legal Department
                </a>                
            </h4>
            <p>Pertaining to Intellectual Property issues.</p>
        </div>
        <div class="col-md-6">
            <h4>
                <a href="mailto:merchant@bazaarcorner.com">
                    Partnership
                </a>     
            </h4>
            <p>
                You want to be featured or to be one of our partners. We're
                happy to serve you.
            </p>
            <br>
            <h4>
                <a href="mailto:press@bazaarcorner.com">
                    PR and Media Team
                </a>                
            </h4>
            <p>
                You can send letters or creative articles with our editorial team.
            </p>
        </div>
    </section>
</div>
<div class="col-md-3">
    <div class="affix">
        <div class="widget-holder">
            <div class="widget-body">
                <h4>Get to know: </h4>
                <ul>
                    <li><a href="#about">The Company</a></li>
                    <li><a href="#mission-vision">Our Mission and Vission</a></li>
                    <li><a href="#contact-information">Contact Information</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@stop

@section('content-inline-script') @stop