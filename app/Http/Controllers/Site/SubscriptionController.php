<?php

namespace BazaarCorner\Http\Controllers\Site;

use BazaarCorner\Http\Controllers\Controller;
use BazaarCorner\Http\Requests\SiteSubscriptionRequest;
use BazaarCorner\Models\Subscription\Subscriber;

class SubscriptionController extends Controller
{
    public function subscribe (
        SiteSubscriptionRequest $request,
        Subscriber $subscriber
    ) {
        $subscriber->create(['email'=> $request->subscription_email]);
        
        return view('site.subscription');
    }
}
