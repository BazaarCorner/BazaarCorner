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
                <i class="fa fa-plus">&nbsp;New Brand</i>
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
                            <th width="20">status</th>
                            <th width="80">image</th>
                            <th width="200">name</th>
                            <th>description</th>
                            <th width="85">action</th>
                        </tr>                        
                    </thead>
                    <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td class="text-center">
                                @if($brand->is_active)
                                    <i class="fa fa-circle text-success"></i>
                                @else
                                    <i class="fa fa-circle text-muted"></i>
                                @endif
                            </td>
                            <td>
                                <img class="img-center img-thumbnail img-responsive"
                                     style="width: 75px; height: 75px"
                                     src="{{asset($brand->image)}}">
                            </td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->description}}</td>
                            <td>
                                <div class="btn-group btn-group-xs" role="group">
                                    <button type="button"
                                            class="btn btn-default" 
                                            onClick="window.location='{{url("member/catalog/brand/$brand->id/edit")}}'">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    {!! Form::open(
                                        [
                                            'method' => 'DELETE',
                                            'class' => 'btn-group btn-group-xs',
                                            'route' => [
                                                'member.catalog.brand.destroy',
                                                $brand->id
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
                    <div class="clearfix"></div>
                </table>
            </div>
        </div>
    </div>
</div>
@stop