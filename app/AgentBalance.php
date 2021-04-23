<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentBalance extends Model
{

    public $timestamps = false;

    protected $table = 'tbl_agent_blnc';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'txn_type', 'total_amount', 'order_id', 'order_status'
    ];

}
