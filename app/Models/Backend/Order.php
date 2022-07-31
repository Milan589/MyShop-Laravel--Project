<?php

namespace App\Models\Backend;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
   use HasFactory;
   use SoftDeletes;
   protected $table = 'orders';
   protected $fillable = ['customer_id', 'shipping_address', 'phone', 'order_code', 'order_status', 'order_date', 'total', 'payment_mode'];

   function customer()
   {
      return $this->hasOne(Customer::class, 'user_id', 'id');
   }
   function orderItems()
   {
      return $this->hasMany(OrderDetail::class);
   }
}
