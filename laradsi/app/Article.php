<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'name', 'image', 'contemt', 'category_id'
    ];
}
