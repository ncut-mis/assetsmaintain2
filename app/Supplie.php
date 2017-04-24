<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplie extends Model
{
    protected $table = 'supplies';

    //耗材連結users資料表
    public function user()
    {
        // return $this->belongsTo
    }
}