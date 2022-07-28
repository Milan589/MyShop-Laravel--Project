<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "customers";
    protected $fillable = ['name','perm_address','temp_address','shipping_address','image','phone','user_id'	];
}

