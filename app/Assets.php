<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    //
    protected $table ='posts';
    protected $fillable= [
        'id',
        'name',
        'category',
        'date',
        'cost',
        'staues',
        'keeper',
        'lendable',
        'location',
        'remark',
        'vendor',
        'warranty',
    ];

}
