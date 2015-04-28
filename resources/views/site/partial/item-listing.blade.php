<div class="container-fluid">
    <div class="content-body">
        <div class="row-fluid">
            <!-- add sorting filter here -->
            <div class="col-md-12">
                <nav class="pull-right">
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
        <div class="row-fluid">
            <div class="col-md-12">
                @include('layout.widgets.product-profiler', ['products', $products])
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="divider"><br><hr></div>
        <div class="row-fluid">
            <div class="col-md-12">
                <nav class="pull-right">
                    <ul class="pagination">
                        <li><a href="#" class="page-active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" aria-label="Next">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>