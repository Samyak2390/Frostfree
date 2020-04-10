<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user(){
        $this->belongsTo('\App\User');
    }

    public function product_detail(){
        $this->hasMany('\App\Product_Detail');
    }
}
