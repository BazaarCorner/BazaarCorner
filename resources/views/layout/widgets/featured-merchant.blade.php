<div class="widget-holder">
    <div class="widget-body">
        <h5><strong>Featured Merchants</strong></h5>
        <ul class="nav nav-stacked">
            @foreach($featured_merchants as $merchant)
            <a href="{{route('member', ['slug' => $merchant->slug])}}"> 
                <li>
                    <div class="row">
                        <div class="col-xs-4">
                            <img class="img-center img-responsive img-rounded" 
                                src="{{ isset($merchant->logo) ? url(env('MERCHANT_LOGO').$merchant->logo) : asset('assets/bazaarcorner/img/no-image.gif') }}"
                                style="width: 50px; height: 50px;">
                        </div>
                        <div class="col-xs-8" style="padding-left: 5px">
                            <div class="row">

                                    <strong>{{$merchant->name}}</strong>

                            </div>
                            <div class="row">
                                <span class="text-muted">
                                    {{$merchant->address}}
                                </span>                            
                            </div>

                        </div>
                    </div>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
</div>


