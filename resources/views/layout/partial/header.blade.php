<div class="navbar navbar-fixed-top" style="background-color: white; box-shadow: 1px 0px 4px silver;" role="navigation">
    <div class="container">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a href="{{route('home')}}">
                    <img src="{{asset('assets/bazaarcorner/img/site/logo.png')}}" style="width: 200px; height: inherit" class="navbar-brand img-responsive img-center">
                </a>
                <div class="navbar-form navbar-left" style="width: 550px">
                    @include('layout.widgets.search')                  
                </div><!-- /.nav-collapse -->
                <div class="navbar-nav navbar-right">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{url('basket')}}"> 
                                <i class="fa fa-cart-plus"></i>&nbsp;My Cart
                            </a>
                        </li>
                        <li>
                            <a href="{{url('wishlist')}}"> 
                                <i class="fa fa-heart"></i>&nbsp;My Wishlist
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#"
                               class="dropdown-toggle"
                               data-toggle="dropdown"
                               role="button"
                               aria-expanded="false">
                                <i class="fa fa-user"></i>&nbsp;Account
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                            @if(Auth::guest())
                                <li>
                                    <a href="{{url('member/login')}}">Sign In</a>
                                </li>
                                <li>
                                    <a href="{{url('member/register')}}">Register</a>
                                </li>
                            @endif
                            @if(Auth::check())
                                <li>
                                    <a href="{{route('profile')}}">Profile Settings</a>
                                </li>                        
                                <li><a href="{{url('member/logout')}}">Logout</a></li>
                            @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row navbar-inverse">
            <div class="menu col-md-12 center-block" style="padding: -50px">
                @include('layout.widgets.store-menu')
            </div>
        </div>
    </div>
</div>