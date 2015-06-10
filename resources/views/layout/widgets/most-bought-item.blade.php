<div class="widget-holder">
    <div class="widget-body">
        <h5><strong>Most Bought</strong></h5>
        <ul class="nav nav-stacked">
            @foreach($most_bought as $item)
            <li>
                {{$item->name}}
            </li>
            @endforeach
        </ul>
    </div>
</div>


