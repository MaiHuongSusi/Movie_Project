<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name_author'];

    public function film(){
        return $this->hasMany('App\Film');
    }
}
