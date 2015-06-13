<div class="half-priced-items">
    @foreach($products as $item)
    <div class="slide">
        <div class="row-fluid">
            <img src="{{url(env('CDN').$item->display_image)}}" style="width: 250px; height: 250px;">
        </div>
        <div class="row-fluid text-center">
            <h6>{{str_limit($item->name, 20)}}</h6>
            <div class="row">
            @if($item->discount_id > 0)
            <span class="text-success"  style="font-size: 12px">
                ${{$item->list_price}}
            </span>
            <span class="text-muted" style="text-decoration: line-through; font-size: 10px">
                ${{$item->orig_price}}
            </span>
            @else 
            <span style="font-size: 12px">
                ${{$item->orig_price}}
            </span>
            <span class="text-muted">
                &nbsp;&nbsp;
            </span>
            @endif
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    @endforeach
</div>