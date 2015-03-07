<?php namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    
    protected $fillable = ['merchant_id', 'customer_id', 'order_status'];

    public function merchants()
    {
        return $this->belongsTo('BazaarCorner\Merchant');
    }
}
