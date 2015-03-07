<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscriptions';
    
    protected $fillable = ['email'];
    
    protected $hidden = ['remember_token'];
}
