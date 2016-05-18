<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'fc_articles';
    // protected $timestamp = false;
    protected $guarded = array();

    public function article_category()
    {
        return $this->belongsTo('App\Category', 'id_cate');
    }

    public function article_member()
    {
        return $this->belongsTo('App\Member', 'id_user');
    }
}
