<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $register = new User();
        $register->name = $request['name'];
        $register->email = $request['email'];
        $register->password = Hash::make($request['password']);
        $register->save();
        return redirect('/');
    }
}
