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
}
