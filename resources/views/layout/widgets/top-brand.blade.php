<div class="widget-holder">
    <div class="widget-body">
        <h5><strong>Top Brands</strong></h5>
        <div class="row-fluid">
            @foreach($top_brands as $brand)
            <div class="col-xs-12 col-sm-6" style="padding: 3px;  text-align: center; font-size: 10px;">
                <img class="img-center img-responsive img-thumbnail" 
                                src="{{ isset($merchant->logo) ? url(env('CDN').$product->display_image) : asset('assets/bazaarcorner/img/no-image.gif') }}"
                                style="width: 125px; height: 125px;">
                
                <span> {{str_limit($brand->name, 10)}} </span>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>    
</div>


