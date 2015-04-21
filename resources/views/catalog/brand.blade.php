@extends('layout.settings')

@section('content')
<div class="content-holder">
    <div class="content-header">
        <div class="container-fluid text-capitalize">
            <div class="pull-left">Manage Brand</div>
            <div class="pull-right">
            <a href="{{route('member.catalog.brand.create')}}"
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
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>                            
                            <th>Active Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td>{{$brand->image}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->description}}</td>                            
                            <td>{{$brand->is_active}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@stop