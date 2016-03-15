<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class LoginRequestController extends Controller
{

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function login()
    {
        return User::where('id', request('id'))->get()->toJson();
    }

}