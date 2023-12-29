<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 

class LoginController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function login_proses(Request $request) {
        $request->validate([
            'nama'     => 'required',
            'password' => 'required',           
        ]);

        $data = [
            'nama'     => $request->nama,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('failed', 'Username atau Password Salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu Berhasil Logout');
    }

    public function register() {
        return view('auth.register');
    }

    public function register_proses(Request $request) {
        $request->validate([
            'nama'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:5',       
        ]);

        $data = [
            'nama'     => $request->nama,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ];
        
        User::create($data);

        $login = [
            'nama'     => $request->nama,
            'password' => $request->password,
        ];

        if (Auth::attempt($login)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('failed', 'Username atau Password Salah');
        }
    }
}