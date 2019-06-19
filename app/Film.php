<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'vn_name', 'en_name', 'td_type_film', 'id_author', 'summary', 'total_chapter', 'current_chapter','link_avt', 'completed', 'publish_year'
    ];
}
