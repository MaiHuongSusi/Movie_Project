<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
       'name_per' 
    ];
    public function user(){
        return $this->hasMany('App\User');
    }
}
