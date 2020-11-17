<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customerinfo extends Model
{
    //



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'order_number', 'subtotal','cardnumber',
    ];



}
