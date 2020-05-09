<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function shop(){
        return $this->belongsTo('App\Shop');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function discount(){
        return $this->hasOne('App\Discount');
    }

    public function product_details(){
        return $this->hasMany('App\Product_Detail');
    }

    public function order_products(){
        return $this->hasMany('\App\OrderProduct');
    }
}
