<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'vn_name', 'en_name','id_author', 'summary', 'total_chapter', 'current_chapter','link_avt', 'completed', 'publish_year'
    ];

    public function author(){
        return $this->belongsTo('App\Author');
    }

    public function typefilm(){
        return $this->belongsToMany('App\TypeFilm');
    }
}
