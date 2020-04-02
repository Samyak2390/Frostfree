<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['user_id', 'shop_name', 'shop_phone', 'shop_address'];

    public function user(){
        $this->belongsTo('\App\User');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

}
