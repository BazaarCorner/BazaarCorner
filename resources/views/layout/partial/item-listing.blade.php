<div class="row">
    <div class="col-md-7" style="padding-top: 10px;">
        <span style="float: left; margin-top: 10px;">Sort by:</span>
        <ul class="sortby">
            @foreach($filters as $filter)
                <li role="presentation" 
                    @if($filter['active'])
                        class="active"
                    @endif
                >
                    <a href="{{$filter['url']}}">{{$filter['name']}}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-5">
        <nav>
            <ul class="pagination">
                <li><a href="#" class="page-active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#" aria-label="Next">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="divider"><hr><br></div>
<div class="row">
    <div class="col-md-12">
        @include('widget.item.product-profile')
        <div class="clearfix"></div>
    </div>
</div>
<div class="divider"><br><hr></div>
<div class="row">
    <div class="col-md-12">
        <nav>
            <ul class="pagination">
                <li><a href="#" class="page-active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#" aria-label="Next">Next</a></li>
            </ul>
        </nav>
    </div>
</div>