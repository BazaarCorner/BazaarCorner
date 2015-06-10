<div class="row-fluid">
    <div class="bazaarcategories">
    <span class="square">-</span><b> Bazaar by Category</b>
        <ul class="stores">
            <li>
                <div class="category">
                    <strong>{{$category->name}}</strong>
                </div>
                @foreach($category->getSubcategory($category->id) as $subcategory)
                <ul class="main_category">
                    <li><a href='{{route('shops', $category->slug. '/'. $subcategory->slug)}}'>{{$subcategory->name}}</a></li>
                </ul>
                @endforeach
            </li>
        </ul>    
    </div>
</div>