<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerDetial extends Model
{
    protected $fillable = [
        'id_detail', 'id_per', 'action_name', 'action_code', 'check_action'
    ];
}
