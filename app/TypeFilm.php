<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeFilm extends Model
{
    protected $fillable = ['name_type'];

    public function film(){
        return $this->hasMany('App\Film');
    }
}
