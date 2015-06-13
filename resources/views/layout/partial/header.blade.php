<div class="container">
    <div class="row" style="padding-top: 15px">
        <div class="col-md-6 col-md-offset-3">
            <div class="center-block" style="width: 100%; height: 100%; text-align: center;">
                <a href="{{route('home')}}" style="">
                    <img src="{{asset('assets/bazaarcorner/img/site/logo.png')}}" class="img-center">
                </a>
            </div>              
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <!--include('layout.widgets.store-menu')-->
        </div>
        <div class="col-md-6">
            @include('layout.widgets.search')
        </div>
        <div class="col-md-3">
            
        </div>
    </div>
</div>