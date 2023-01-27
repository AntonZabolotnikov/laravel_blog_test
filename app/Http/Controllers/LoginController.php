<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {

        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();
        // $full = $request->fullUrl();
        // $isLogin = $request->is('login');
        // $routeIs = $request->routeIs('login.store');
        // dd($ip, $path, $url, $full, $isLogin, $routeIs);

        /* $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->boolean('remember');

        dd($email, $password, $remember);

        return 'store Login'; */

        //return response()->redirectTo('/foo');
        //return response()->redirectToRoute('user');
        //return redirect('/foo');

        if(true) {
            return redirect()->back()->withInput();
        }

        return redirect()->route('user');
    }
}
