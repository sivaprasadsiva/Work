<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class FormController extends Controller
{
    public function register()
    {
        // echo auth()->user()->name;
        return view('Register');
    }

    public function submitForm(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ];

        DB::table('users')->insert($data);


        return redirect('/')->with('success', 'Form submitted successfully!');
    }



    public function loginForm(Request $request)
    {
        $credentials = $request->only('email', 'password');



        if (Auth::attempt($credentials)) {
            return redirect('/home');
        }
        else{
            return 'Login Failed';
        }
    }

    public function home()
    {
        if( auth()->user()->status == 0)
        {
            return redirect('/user-home');
        }else{
            return redirect('/admin-home');
        }
    }

    public function adminHome()
    {
        return view('admin');
    }

    public function userHome()
    {
        return view('user');
    }
}
