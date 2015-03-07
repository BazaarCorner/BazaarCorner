<div class="box-left">
    <h3 style="margin-top: 0px">{{$user->first_name}}&nbsp;{{$user->last_name}}</h3>
    <div class="row">
        <div class="col-md-6">
            <span>{{$user->age}} years old<br />
            {{$user->address}}
            </span><br /><br />
            <span style="color:#999">Contact:</span><br />
            <span>{{$user->phone}}</span>
        </div>
        <div class="col-md-6">
<!--            <span class="span2"><a href="#">Send Message</a></span><br /><br />
            <span class="span2"><a href="#">Add to Wishlist</a></span><br /><br />
            <span class="span2"><a href="#">IM/Call</a></span>-->
        </div>
    </div><br />
    <div class="row">
        <div class="col-md-12">
            <div style="margin-bottom: 6px"><span>Follow me:</span></div>
            <img src="img/icons/facebook.png" />&nbsp;<span style="position:relative;top:-10px">denise_santos</span><br/>
            <img src="img/icons/twitter.png" />&nbsp;<span style="position:relative;top:-10px">#denise_santos</span><br/>
        </div>
    </div>
</div>