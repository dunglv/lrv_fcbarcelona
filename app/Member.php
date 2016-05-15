<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'fc_members';
    protected $timestamps = false;
    protected $guarded = array();

    public function member_article()
    {
        return $this->hasMany('App\Article', 'id');
    }
}
