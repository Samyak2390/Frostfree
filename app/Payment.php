<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['order_id', 'user_id', 'price'];

    public function user(){
        $this->belongsTo('\App\User');
    }
}
