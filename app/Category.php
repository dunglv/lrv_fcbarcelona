<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'fc_categories';
    protected $timestamps = false;
    protected $guarded = array();

    public function category_article()
    {
        return hasMany('App\Article', 'id');
    }
}
