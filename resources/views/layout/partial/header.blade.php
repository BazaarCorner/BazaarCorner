<nav class="navbar navbar-fixed-top" style="background-color: white; box-shadow: 1px 0px 4px silver;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand img-responsive center-block" href="{{route('home')}}">
                <img src="{{asset('assets/bazaarcorner/img/site/logo.png')}}" style="width: 150px;">
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <div class="nav navbar-nav navbar-left col-md-4">
                <!--include('layout.widgets.search')-->
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#"> Market Place </a></li>-->
                <li class="dropdown">
                    <a href="#"
                       class="dropdown-toggle"
                       data-toggle="dropdown"
                       role="button"
                       aria-expanded="false">
                        <i class="fa fa-user"></i> Account
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
</nav>