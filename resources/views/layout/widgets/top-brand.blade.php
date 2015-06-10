<div class="widget-holder">
    <div class="widget-body">
        <h5><strong>Top Brands</strong></h5>
        <ul class="nav nav-stacked">
            @foreach($top_brands as $brand)
            <li>
                {{$brand->name}}
            </li>
            @endforeach
        </ul>
    </div>    
</div>


