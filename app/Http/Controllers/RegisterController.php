<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request) {

        $data = $request->all();

        // $data = $request->only(['name', 'email']);
        // $data = $request->except(['name', 'email']);
        // $data = $request->input('name');
        // $remember = !! $request->input('remember');
        // $remember = $request->boolean('remember');
        // $file = $request->file('avatar');

        // $request->has('name');
        // $request->filled('name');
        // $request->missing('name');

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');
        $agreement = $request->boolean('agreement');

        // dd($name, $email, $password, $passwordConfirmation, $agreement);

        if(true) {
            return redirect()->back()->withInput();
        }

        return redirect()->route('user');
    }
}
