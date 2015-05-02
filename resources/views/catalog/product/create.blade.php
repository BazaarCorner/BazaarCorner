@extends('layout.settings')

@section('content')
<div class="content-holder">
    <div class="content-header">
        <div class="container-fluid text-capitalize">
            <div class="pull-left">Catalog - New Product</div>            
        </div>
    </div>
    <div class="content-body">
        <div class="container-fluid">
            {!! Form::open(['route' => 'member.catalog.product.store']) !!}
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
                            'placeholder' => 'Product name'
                        ]
                    ) !!}
                </div>
                <div class="form-group">
                    {!! Form::text(
                        'price', //input type
                        '0.00', 
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'Price'
                        ]
                    ) !!}
                </div>
                <div class="form-group">
                    <select class="form-control" name="brand_id">
                        <option value="0">-- Select Brand Name --</option>
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
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
                    <div class="form-group btn-group-xs">
                        <a href="{{route('member.catalog.product.index')}}"
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

@section('head-link')
<link rel="stylesheet" type="text/css" href="/assets/bazaarcorner/css/plugins/JQueryFileUpload/jquery.fileupload.css">
<link rel="stylesheet" type="text/css" href="/assets/bazaarcorner/css/plugins/JQueryFileUpload/jquery.fileupload-ui.css">
@stop


@section('content-inline-script')
<script src="/assets/jquery-ui/ui/widget.js"></script>
<script src="/assets/bazaarcorner/js/plugins/metisMenu/metisMenu.min.js"></script>
<script src="/assets/bazaarcorner/js/merchant.js"></script>

<script src="/assets/bazaarcorner/js/plugins/input-mask/jquery.inputmask.bundle.js"></script>

<script src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.fileupload.js"></script>
<script src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.iframe-transport.js"></script>
<script src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.fileupload-process.js"></script>
<script src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.fileupload-validate.js"></script>
<script src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.fileupload-ui.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<script src="/assets/bazaarcorner/js/fileupload.js"></script>

<script type="text/javascript">
$("#item_price").inputmask({alias:'currency'});
</script>
@stop


