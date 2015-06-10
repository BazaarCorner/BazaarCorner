<!--<nav class="navbar navbar-fixed-top" style="background-color: white; box-shadow: 1px 0px 4px silver;" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand img-responsive center-block" href="{{route('home')}}">
                <img src="{{asset('assets/bazaarcorner/img/site/logo.png')}}" style="width: 150px;">
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <div class="nav navbar-nav navbar-left col-md-4">
                
            </div>
        </div>
    </div>    
</nav>-->

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
                  <img src="{{asset('assets/bazaarcorner/img/site/logo.png')}}" style="width: 150px;">
              </a>
              <div class="nav-collapse">    
                  @include('layout.widgets.search')                  
              </div><!-- /.nav-collapse -->
            </div>            
        </div>
    </div>
    <div class="container">
        <div class="row-fluid">
            @include('layout.widgets.store-menu')
        </div>
    </div>
    
</div>




