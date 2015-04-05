@extends('layout.site')

@section('meta-name')
<!--    <meta name="description" 
        content="Your top-1 Social E-Commerce. Revolutionize the way you shop">-->
@stop

@section('page-title')
    <title>Bazaar Corner - Market Place</title>
<!--    <meta 
        title="BazaarCorner. Your top-1 Social E-Commerce.
            Revolutionize the way you shop">-->
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <h5>Participating Sellers</h5>
            <ul>
                <li>
                    <ul class="list-inline">
                        <li>Merchant Name #1</li>
                        <li>Item count</li>
                    </ul>
                </li>
                
                <li>
                    <ul class="list-inline">
                        <li>Merchant Name #2</li>
                        <li>Item count</li>
                    </ul>
                </li>
                
                <li>
                    <ul class="list-inline">
                        <li>Merchant Name #3</li>
                        <li>Item count</li>
                    </ul>
                </li>
            </ul>
        </div>        
        <div class="col-lg-7 col-md-7" style="box-shadow: 0px 0px 1px silver; padding-bottom: 5px;">
            <h4>Market Place</h4>
            <div class="container-fluid">
                <span class="item-search">
                    <span class="text-center">Item search</span>
                </span>
            </div>
            <div class="divider">
                <hr>
                <nav class="pull-right">
                    <ul class="pagination">
                        <li><a href="#" class="page-active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" aria-label="Next">Next</a></li>
                    </ul>
                </nav>
                 <hr>
                 <br>
            </div>
            <div class="container-fluid">
                <ul>
                    <li style="box-shadow: 0px 0px 1px orangered">
                        Item#1
                    </li>
                    <li style="box-shadow: 0px 0px 1px orangered">
                        Item#1
                    </li>
                    <li style="box-shadow: 0px 0px 1px orangered">
                        Item#1
                    </li>
                    <li style="box-shadow: 0px 0px 1px orangered">
                        Item#1
                    </li>
                    <li style="box-shadow: 0px 0px 1px orangered">
                        Item#1
                    </li>
                    <li style="box-shadow: 0px 0px 1px orangered">
                        Item#1
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="divider">
                <hr>
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
        <div class="col-lg-2 col-md-2">
            <div class="row-fluid text-center"  style="box-shadow: 0px 0px 1px silver; padding-bottom: 5px;">
                <span>Advertisement</span>
                <div class="divider"><hr></div>
                <h6>Skyscraper Banner Here</h6>
            </div>            
        </div>
    </div>
</div>
@stop
