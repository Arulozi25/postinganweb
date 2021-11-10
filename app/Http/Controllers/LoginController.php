<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        // $userInfo=User::where('email','=', $request->email)->first();
        // if($userInfo){
        //     return back()->with('fail', 'we do not recognize your email');
        // }else{
        //     //pasword chek
        //     if(Hash::check($request->password, $userInfo->password)){
        //         $request->session()->put('loggeUser', $userInfo->id);
        //         return redirect('/Home');
        //     }else{
        //         return back()->with('fail', 'Incorrect password');
        //     }
        // }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('/Home');
            // return redirect('/Home');
        }
        // dd();

            // return back()->with('LoginError','Login failed!');

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        //     'password' => 'The provided credentials do not match our records.',
        // ]);
    }
}
