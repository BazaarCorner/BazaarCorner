<div class="navbar navbar-fixed-top"  style="background-color: white; box-shadow: 1px 0px 4px silver;" role="navigation">
    <div class="container">
        <div class="navbar-inner">
            <div class="container-fluid">
              <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a class="navbar-brand img-responsive center-block"  href="{{route('home')}}">
                  <img src="{{asset('assets/bazaarcorner/img/site/logo.png')}}" style="width: 250px;">
              </a>
              <div class="nav-collapse">    
                  @include('layout.widgets.search')                  
              </div><!-- /.nav-collapse -->
            </div>
        </div>  
    </div>   
    <div class="container-fluid">
        <div class="row  navbar-inverse">
            <div class="menu col-md-12 center-announcement">
                @include('layout.widgets.store-menu')
            </div>
        </div>
    </div>
</div>