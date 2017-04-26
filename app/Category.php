<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    // protected $timestamps = false;
    protected $guarded = array();

    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
