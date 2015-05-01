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
                <i class="fa fa-plus">&nbsp;New Product</i>
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
                            <th>Status</th>
                            <th>Image</th>
                            <th>SKU</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <!--<th>Category</th>-->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="text-center">
                                @if($product->is_active)
                                    <i class="fa fa-circle text-success"></i>
                                @else
                                    <i class="fa fa-circle text-muted"></i>
                                @endif
                            </td>
                            <td>
                                <img class="img-center img-thumbnail img-responsive"
                                     style="width: 75px; height: 75px"
                                     src="{{asset($product->image)}}">
                            </td>
                            <td>{{$product->sku}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                {{isset($product->brand()->getResults()->name) ? $product->brand()->getResults()->name : ""}}
                            </td>
                            <!--<td>{{$product->category}}</td>-->
                            <td>
                                <div class="btn-group btn-group-xs" role="group">
                                    <button type="button"
                                            class="btn btn-default"
                                            onClick="window.location='{{url("member/catalog/product/$product->id/edit")}}'">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    {!! Form::open(
                                        [
                                            'method' => 'DELETE',
                                            'class' => 'btn-group btn-group-xs',
                                            'route' => [
                                                'member.catalog.product.destroy',
                                                $product->id
                                            ]
                                        ]
                                    ) !!}                                          
                                        <button type="submit"
                                                class="btn btn-default">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    {!! Form::close() !!}
                                    
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