<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'fc_comments';

    public function article()
    {
        return $this->belongsTo('App\Article', 'id_article');
    }
    public function member()
    {
        return $this->belongsTo('App\Member', 'id_user');
    }
}
