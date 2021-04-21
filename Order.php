<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'restaurant_order';

    protected $fillable = ['item_name', 'item_price', 'quantity', 'created_date', 'delivery_boy_id'];

    public $timestamps = false;


}
