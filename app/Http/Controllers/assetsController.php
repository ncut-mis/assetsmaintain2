<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetsController extends Controller
{
    //

     protected $table = 'asset_form';
    protected $fillable = [
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
