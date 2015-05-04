<div class="container-fluid">
    <div class="content-body">
        <div class="row-fluid">
            <div class="pull-right">
                {!! $products->render(); !!}
            </div>
        </div>
        <div class="divider"><hr><br></div>
        <div class="row-fluid">
            @include('layout.widgets.product-profiler', ['products', $products])
            <div class="clearfix"></div>
        </div>
        <div class="divider"><br><hr></div>
        <div class="row-fluid">
            <div class="pull-right">
                {!! $products->render(); !!}
            </div>
        </div>
    </div>
</div>