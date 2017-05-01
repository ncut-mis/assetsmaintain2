<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    //




    public function Application(){
        return $this->belongsTo(AssetMaintainceApplication::class);
    }
}
