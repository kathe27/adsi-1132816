<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
    	'name', 'image', 'contemt', 'category_id'
    ];

    public function category(){
    	return $this->belongsTo('App\category');
    }

    public function getCreatedAtAttribute($date){
    	Carbon::setlocale('es');
    	//return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('l j F Y');
    	return Carbon::createFromFormat('Y-m-d H:i:s', $date)->diffForHumans();
    }

    public function scopeName($query, $name){
        if (trim($name) !='') {
            $query->where('name', "LIKE", "%$name%")
                  ->orwhere('content', "LIKE", "%$name%");
        }
    }
}
