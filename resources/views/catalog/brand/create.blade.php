@extends('layout.settings')

@section('content')
<div class="content-holder">
    <div class="content-header">
        <div class="container-fluid text-capitalize">
            <div class="pull-left">Catalog - New Brand</div>            
        </div>
    </div>
    <div class="content-body">
        <div class="container-fluid">
            {!! Form::open(['route' => 'member.catalog.brand.store']) !!}
            @if($errors->has())
                <div class="alert alert-warning">
                    @foreach($errors->all() as $error)
                        <span class="text-danger">* {{$error}}</span><br>
                    @endforeach
                </div>
            @endif
                <div class="form-group">
                    {!! Form::text(
                        'name', //input type
                        '', 
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'Brand name'
                        ]
                    ) !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea(
                        'description', //input type
                        '', 
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'Description'
                        ]
                    ) !!}
                </div>
                <div class="row-fluid pull-right">
                    <div class="form-group">
                        <a href="{{route('member.catalog.brand.store')}}"
                           role="button"
                           class="btn btn-default text-uppercase">
                            Cancel
                        </a>
                        <input class="btn btn-danger text-uppercase" type="submit" value="Create">
                    </div>       
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop