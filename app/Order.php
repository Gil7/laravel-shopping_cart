<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id','name','address','payment_id','cart',
    ];

    public function user(){
      return $this->belongsTo('App\User');
    }
}
