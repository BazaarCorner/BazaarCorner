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
                        'sku',
                        '', 
                        [
                            'class' => 'form-control', 
                            'placeholder' => 'SKU'
                        ]
                    ) !!}
                </div>
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
                    <select class="form-control" name="brand_id">
                        <option value="1">Brand #1</option>
                        <option value="2">Brand #2</option>
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
                <div class="form-group">
                    <div style="margin-bottom:10px;position:relative;">
	                            <span class="btn btn-success btn-sm fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Add images...</span>
									<input id="upload_item_image" type="file" name="files[]" multiple data-url="<?=URL::to('/upload/item')?>" style="cursor:pointer;">
								</span>
                                <button id="fileupload-delete-all" type="button" class="btn btn-sm btn-danger delete" style="display:none;">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    <span>Delete All</span>
                                </button>
							</div>
							<div id="item-image-error" class="alert alert-danger alert-dismissable" style="display:none;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Please upload an image</strong></div>
                            <div id="fileupload-progress" class="progress" style="display:none;"><div class="progress-bar progress-bar-success"></div></div>
							<input id="item_primary_image" name="item_primary_image" type="hidden" value=""/>
                            <table id="uploaded_images" role="presentation" class="table table-striped">
							</table>
                </div>
                <div class="row-fluid pull-right">
                    <div class="form-group">
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

@section("content-inline-script")
<script src="/assets/jquery-ui/ui/widget.js"></script>
<script src="/assets/bazaarcorner/js/plugins/metisMenu/metisMenu.min.js"></script>
<script type="text/javascript" src="/assets/bazaarcorner/js/merchant.js"></script>
<script type="text/javascript" src="/assets/bazaarcorner/js/plugins/input-mask/jquery.inputmask.bundle.js"></script>

<script type="text/javascript" src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.fileupload.js"></script>
<script type="text/javascript" src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.fileupload-process.js"></script>
<script type="text/javascript" src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.fileupload-validate.js"></script>
<script type="text/javascript" src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/jquery.fileupload-ui.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script type="text/javascript" src="/assets/bazaarcorner/js/plugins/JQueryFileUpload/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<script type="text/javascript" src="/assets/bazaarcorner/js/fileupload.js"></script>
@stop