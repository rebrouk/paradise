<?php

namespace App\Http\Controllers\Auth;
//namespace App\models\Users;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    use AuthenticatesUsers;

    protected function guard()
    {
        return Auth::guard('guard-name');
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    public function username()
    {
        return 'username';
    }

    protected function redirectTo()
    {
        return '/';
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)  //  ВЫПОЛНЯЕТ ВХОД ЧЕРЕЗ ФОРМУ ВВОДА ЛОГИНА И ПАРОЛЯ
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/');
        }
    }
}
