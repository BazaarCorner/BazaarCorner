@extends('layout.settings')

@section('content')
<div class="content-holder">
    <div class="content-header">
        <div class="container-fluid text-capitalize">
            <div class="pull-left">Catalog - Update Product Information</div>
        </div>
    </div>
    <div class="content-body">
        <div class="container-fluid">
            {!! Form::model($product, ['method'=>'patch', 'route'=>['member.catalog.product.update', $product->id]]) !!}
            @if($errors->has())
                <div class="alert alert-warning">
                    @foreach($errors->all() as $error)
                        <span class="text-danger">* {{$error}}</span><br>
                    @endforeach
                </div>
            @endif
                <div class="form-group">
                    {!! Form::label('SKU:') !!}
                    {!! Form::text('sku', $product->sku, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Name:') !!}
                    {!! Form::text('name', $product->name, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Brand Name:') !!}
                    <select class="form-control" name="brand_id">
                        @foreach($brands as $brand)                        
                        <option value="{{$brand->id}}"                                
                                @if($product->brand_id === $brand->id) selected @endif >
                            {{$brand->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    {!! Form::label('Description:') !!}
                    {!! Form::textarea('description', $product->description, ['class' => 'form-control']) !!}
                </div>
                <div class="row-fluid pull-right">
                    <div class="form-group">
                        <a href="{{route('member.catalog.product.index')}}"
                           role="button"
                           class="btn btn-default text-uppercase">
                            Cancel
                        </a>
                        <input class="btn btn-danger text-uppercase" type="submit" value="Update">
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop