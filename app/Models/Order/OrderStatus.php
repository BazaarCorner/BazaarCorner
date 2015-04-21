<?php

namespace BazaarCorner\Models\Order;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
	protected $table 		= 'order_status';
	protected $primaryKey 	= 'code';
}
