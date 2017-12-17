<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function registerForm() {
        return view('admin.register');
    }

    public function register(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required| min:6'
        ]);
        $user = User::add($request->all());
        $user->generatePassword($request->get('password'));

        return redirect()->route('admin.login');
    }

    public function loginForm() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ])) {
            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('status', 'Неправильний логін або пароль!');
    }

    public function logout() {
        Auth::logout();

        return redirect('/adminka-arm-page/login');
    }
}
