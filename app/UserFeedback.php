<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class UserFeedback extends Model
{
    protected $table = 'user_feedbacks';
    
    protected $fillable = ['user_id', 'follower_id', 'feedback'];
    
    public function users()
    {
        $this->belongsTo('BazaarCorner\User');
    }
}
