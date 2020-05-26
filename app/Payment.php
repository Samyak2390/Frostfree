<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['order_id', 'user_id', 'price',  'created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo('\App\User');
    }
}
