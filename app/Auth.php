<?php

namespace App;
use Illuminate\Http\Request;

class Auth {
    
    public static function logout()
    {
        session()->flush();
        Loader::loadPricing();
    }

    public static function check(Request $request)
    {
        if($request->session()->has('id')) {
            return session('id', 0) > 0;
        }
        return false;
    }
}
