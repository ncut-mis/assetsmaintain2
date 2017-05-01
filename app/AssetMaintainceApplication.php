<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetMaintainceApplication extends Model
{
    //
    protected $table ='applications';

    protected $fillable = [
        'id', 'u_id', 'm_id','problem','date'
    ];
    public function comments(){
        return $this ->hasMany(Assets::class);
    }
}
