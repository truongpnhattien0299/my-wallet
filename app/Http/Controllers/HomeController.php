<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function Login()
    {
        if(Auth::check())
            return redirect()->route('dashboard');
        return view('login');
    }

    public function Register()
    {
        if(Auth::check())
            return redirect()->route('dashboard');
        return view('register');
    }

    public function Dashboard()
    {
        return view('dashboard');
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
            return redirect()->route('dashboard');
        return redirect()->back()->withInput()->withErrors('errors', 'Cant login to application');
    }

    public function postRegister(RegisterRequest $request)
    {
        if (is_null($user = User::where('username', $request->username)->where('email', $request->email)->first())) {
            $user = new User();
            $user->fill($request->all());
            if ($user->save()) {
                Auth::login($user);
                return redirect()->route('dashboard');
            }
            return redirect()->back()->withInput()->withErrors('errors', 'Cant register with this information');
        }
        return redirect()->back()->withInput()->withErrors('errors', 'Username or Email was existed!');
    }

    public function SignOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
