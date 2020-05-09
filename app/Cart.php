<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user(){
        return $this->belongsTo('\App\User');
    }

    public function product_detail(){
        return $this->hasMany('\App\Product_Detail');
    }

    public function orders(){
        return $this->hasMany('\App\Order');
    }
}
