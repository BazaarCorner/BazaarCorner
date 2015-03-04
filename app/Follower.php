<?php namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    protected $table = 'followers';
    
    protected $fillable = ['user_id', 'follower_id'];
    
    /**
     * Fetch Users model object
     * 
     * @return BazaarCorner\User
     */
    public function user()
    {
        return $this->belongsTo('BazaarCorner\User');
    }
}
