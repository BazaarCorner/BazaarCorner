@extends('layout.settings')

@section('content')
<div class="content-holder">
    <div class="content-header">
        <div class="container-fluid text-capitalize">
            <div class="pull-left">Manage Product</div>
            <div class="pull-right">
            <a href="{{route('member.catalog.product.create')}}"
               role="button"
               class="btn btn-danger btn-xs">
                <i class="fa fa-plus"></i>
            </a>
        </div>
        </div>
    </div>
    <div class="content-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="text-capitalize">
                        <tr>
                            <th>Image</th>
                            <th>SKU</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->image}}</td>
                            <td>{{$product->sku}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->brand}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->is_active}}</td>
                            <td class="center-block">
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button"
                                            class="btn btn-default" 
                                            onClick="window.location='{{url("member/catalog/product/$product->product_id/edit")}}'">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop