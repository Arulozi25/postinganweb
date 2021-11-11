<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function welcome()
    {
        return view('welcome');
    }

    public function authenticate(Request $request)
    {

        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return 'berhasil';
        // }
        // return 'gagal';
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('dashboard')
        //                 ->withSuccess('Signed in');
        // }

        // return redirect("Home")->withSuccess('Login details are not valid');

        // $credentials['password'] = Hash::make($credentials['password']);
        // return $request->all();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/Home');
            // return redirect('login')->with('error',"kamu gak punya akses");
        }
        // dd($credentials);

        // return back()->withErrors([
        //     'email' => 'error email.',
        //     'password' => 'error pass',
        // ]);

        return back()->with('LoginError','Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
        // return view('welcome');
    }
}
