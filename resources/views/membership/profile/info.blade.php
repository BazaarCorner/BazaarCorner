<div class="widget-holder">
    <div class="widget-body">
        <div class="row">
            <div class="col-md-12 text-nowrap">
                <h4 class="text-capitalize">{{$member['name']}}</h4>
                <span class="text-muted"><small>{{$member['address']}}</small></span>
            </div>
        </div>
        <div class="row-fluid">
            <p>Follow me on:</p>
            <a href="{{'https://facebook.com/' . $member['facebook']}}" target="_blank">
                <i class="fa fa-facebook-square fa-2x tooltips" data-placement="bottom" data-toogle="tooltip" title="facebook">
                </i>
            </a>
            <a href="{{'https://twitter.com/' . $member['twitter']}}" target="_blank"> 
                <i class="fa fa-twitter-square fa-2x tooltips" data-placement="bottom" data-toogle="tooltip" title="twitter"></i>
            </a>
        </div>
    </div>
</div>
