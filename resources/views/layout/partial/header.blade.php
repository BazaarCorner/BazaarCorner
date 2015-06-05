<nav class="navbar navbar-fixed-top" style="background-color: white; box-shadow: 1px 0px 4px silver;" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand img-responsive center-block" href="{{route('home')}}">
                <img src="{{asset('assets/bazaarcorner/img/site/logo.png')}}" style="width: 150px;">
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <div class="nav navbar-nav navbar-left col-md-4">
                @include('layout.widgets.search')
            </div>
        </div>
    </div>
</nav>
