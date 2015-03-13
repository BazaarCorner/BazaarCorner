<div class="row-fluid">
    <div class="bazaarcategories">
    <span class="square">-</span><b> Bazaar by Category</b>
        <ul class="stores">
            @foreach($store_categories as $categories)
            <li>
                <div class="category">
                    <strong><a href='{{route('shops', $categories->slug)}}'>{{$categories->name}}</a></strong>
                </div>
                <!-- subcategory here -->
            </li>
            @endforeach
        </ul>

<!--    <span class="square">-</span><b> Bazaar by Category</b>
            <form role="form"> 
              <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Search Brand..." style="width: 80%; margin: 5px 0 0 30px;" />
                    <i class="form-control-feedback glyphicon glyphicon-search" style="padding-right: 40px;"></i>
              </div>
            </form>	

    <span class="square">-</span><b> Bazaar by Price</b>
            <ul>
                    <li>Free - $100</li>
                    <li>100 - $200</li>
                    <li>200 - $400</li>
                    <li>400 - $600</li>
                    <li>600 - $800</li>
                    <li>1000 and up</li>
            </ul>-->
    
    </div>
</div>