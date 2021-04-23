<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Orders extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_id',
        'order_type',
        'user_id',
        'order_vendor',
        'order_total',
        'order_meta',
        'origin',
        'destinatoin',
        'pessenger_name',
        'travel_date',
        'ordered_at'
    ];
}
