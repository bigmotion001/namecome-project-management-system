<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    //Login pattern functions
    public function redirect(){
        $userType = Auth::user()->user_type;

        if ($userType === '1') {
            return view('admin.home');
        }
        else{
            return view('frontend.home');
        }
    }
}
