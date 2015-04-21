<?php

namespace BazaarCorner\Models\Order;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table 		= 'orders';
	protected $primaryKey 	= 'id';
    
	public function status()
    {
        return $this->belongsTo('OrderStatus','code','order_status');
    }

    public function items()
    {
    	return $this->hasMany('Item');
    }

    public function payment()
    {
    	return $this->belongsTo('Payment');
    }

}
