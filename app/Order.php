<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['cart_id', 'collection_slot_id', 'delivery_status'];

    public function collection_slot()
    {
        return $this->belongsTo('App\CollectionSlot');
    }

    public function cart(){
        return $this->belongsTo('\App\Cart');
    }

    public function order_products(){
        return $this->hasMany('\App\OrderProduct');
    }

    public function payment()
    {
        return $this->hasOne('App\Payment');
    }
}
