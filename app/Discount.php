<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = ['product_id', 'discount'];

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
