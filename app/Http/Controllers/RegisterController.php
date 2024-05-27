<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'name'     => ['regex:/^[А-Яа-я\- ]{1,}$/u', 'required'],
            'email'    => ['email', 'unique:users', 'required'],
            'number'   => ['required'],
            'password' => ['confirmed','min:6', 'required']
        ]);

        $user = User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'number'   => $request->number,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        $request->session()->regenerate();
        return redirect('/')->with('success', 'Вы успешно зарегистрировались!');
    }

    public function loginform(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->isAdmin){

                return redirect('/admin/projects');

            }
            else{
                return redirect('/')->with('success', 'Вы успешно вошли в аккаунт!');
            }
        }
        return back()->withErrors([
            'email' => 'Неверное имя пользователя или пароль',
        ])->onlyInput('email');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
//        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Вы вышли из аккаунта');
    }
}
