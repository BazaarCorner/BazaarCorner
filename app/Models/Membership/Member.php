<?php

namespace BazaarCorner\Models\Membership;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Member extends Model implements
    AuthenticatableContract,
    CanResetPasswordContract
{
    use Authenticatable;
    use CanResetPassword;
    
    protected $table = 'merchants';
    
    protected $fillable = [        
        'email',
        "first_name",
        'middle_name',
        "last_name",
        "is_merchant"
    ];
    
    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
    protected $hidden = ['password', 'remember_token'];
    
    public function users()
    {
        return $this->belongsTo("BazaarCorner\Models\Membership\User", 'user_id', 'id');
    }
}