<div class="col-md-12" style="font-size: 12px">
    <ul class="nav nav-pills">        
        @foreach($stores as $store)
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle">{{$store->name}} <b class="caret"></b></a>
          <ul class="dropdown-menu"  style="font-size: 12px">
            @foreach($store->getSubcategory($store->id) as $subcategory)
            <li><a href="{{url($store->slug . "/". $subcategory->slug)}}">{{$subcategory->name}}</a></li>
            @endforeach
          </ul>
        </li>
        @endforeach
    </ul>
</div>
