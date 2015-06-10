<div class="widget-holder">
    <div class="widget-body">
        <h5><strong>Featured Merchants</strong></h5>
        <ul class="nav nav-stacked">
            @foreach($featured_merchants as $merchant)
            <li>
                {{$merchant->name}}
            </li>
            @endforeach
        </ul>
    </div>
</div>


