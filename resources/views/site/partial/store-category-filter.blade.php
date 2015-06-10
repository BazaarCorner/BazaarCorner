<div class="row-fluid">
    <div class="categories">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation">
                <div class="category">
                    <strong>{{$category->name}}</strong>
                </div>
                <ul class="nav nav-pills nav-stacked">
                    @foreach($category->getSubcategory($category->id) as $subcategory)
                    <li role="presentation">
                        <a href='{{route('shops', $category->slug. '/'. $subcategory->slug)}}'>
                            {{$subcategory->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>    
    </div>
</div>