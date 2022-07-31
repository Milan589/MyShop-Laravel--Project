<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $primaryKey = 'order_details_id';
    protected $table = 'order_details';
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price', 'options'];

    function customer(){
        return $this->belongsTo(Customer::class, 'customer_id','id');
    }
}
