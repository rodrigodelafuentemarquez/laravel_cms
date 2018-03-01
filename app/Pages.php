<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    //

    protected $fillable = [
        'page_id', 'posted', 'name', 'slug', 'template', 'content',
    ];
}
