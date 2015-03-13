@extends('maintenance.site')

@section('content')
<!-- Main -->
<div id="main">
    <div class="inner">
        <!-- Header -->
        <header class="site-header">
            <h1 class="site-title fade-in">
                <img src="{{asset('site/images/logo.png')}}" 
                     width="440" height="81"
                     alt="Bazaar Corner " />
            </h1>
        </header>

        <!-- Content -->
        <section class="content">

                <h2 class="site-title fade-in">
                    From Hi to Buy. Share to Sell.
                </h2>
                <p class="subtitle">time left before launch</p>

                <!-- Countdown timer -->
                <div id="timer"></div>

<!--                <p class="subtitle">Notify Me When It's Ready</p>

                 Newsletter form 
                <div id="newsletter" class="form-wrap">
                        {!! Form::open(['url' => '/subscribe', 'name'=> 'subscribe']) !!}
                             
                            <div class="form-group">
                                <div class="input-group">
                                    <em>
                                        {!! Form::email(
                                            'subscription_email',
                                            '',
                                            [
                                                'class' => 'form-control',
                                                'placeholder' => 'email@example.com'
                                            ]
                                        ) !!}
                                    </em>
                                    <span class="input-group-btn">
                                        {!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}
                                    </span>
                                </div>
                            </div>
                        {!! Form::close() !!}
                </div>-->

                <!-- Social links -->
                <div class="social">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/BazaarCorner2012" 
                               title="Facebook" target="_blank" >
                                <img src="{{asset('site/images/16-facebook.png')}}" />
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/bazaarcorner" 
                               title="Twitter" target="_blank">
                                <img src="{{asset('site/images/16-twitter.png')}}" />
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/bazaarcorner" 
                               title="Linkedin" target="_blank">
                                <img src="{{asset('site/images/16-linkedin.png')}}" />
                            </a>
                        </li>

                    </ul>
                </div>
        </section>
        <!-- Modal page toggle -->
        <div class="modal-toggle">
            <a href="#" id="modal-open" >
                READ MORE
                <span class="screen-reader-text">Open</span>
            </a>
        </div>
    </div>
</div>

<!-- Modal page: About Us -->
<div id="modal">
    <div class="inner">

        <!-- Modal toggle -->
        <div class="modal-toggle">
            <a href="#" id="modal-close" class="icon icon-cross fa fa-close">
                <span class="screen-reader-text">Close</span>
            </a>
        </div>

        <!-- Content -->
        <section class="content">

            <h1 class="section-title">Aboout Bazaar Corner</h1>

            <!-- Columns -->
            <div class="row">
                <div class="one-half">
                    <p>
                        Bazaarcorner.com is an online market where users are opt
                        to participate in a social network community wherein
                        they can pick, choose and follow those individuals,
                        merchants, boutiques and favourite brands they like.
                        Its more likely a fun and discovery, setting up its 
                        users on a pre-shopping mode, making them more excited 
                        on what are those next things to come.
                    </p>
                </div>
                <div class="one-half">
                        <h2><i class="icon icon-phone"></i>Phone</h2>
                        <p>Phone: 0000 000 000</p>
                        <h2><i class="icon icon-mail"></i>Email</h2>
                        <p>info@bazaarcorner.com</p>
                        <h2><i class="icon icon-address"></i>Address</h2>
                        <p>
                            Dona Rosa, Village, Davao City 8000 Philippines 
                            Davao, Davao Del Sur 8000 Philippines
                        </p>
        <!-- Columns -->
                </div>
            </div>

        </section>
    </div>
</div>
@stop