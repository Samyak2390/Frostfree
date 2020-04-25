<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectionSlot extends Model
{
    protected $fillable = ['time', 'day'];

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
