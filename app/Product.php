<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = "products";
    // protected $primaryKey = "product_num";
    // public $inrementing = false;
    // public $timestamps = false;
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
