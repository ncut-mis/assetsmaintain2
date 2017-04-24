<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public  function ___construct()
    {
        $this ->middleware('guest',['except' => ['getLogout']]);
    }
    public function getLogin(){
        return;
    }
}
