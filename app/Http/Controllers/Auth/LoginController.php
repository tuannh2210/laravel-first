<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// Use thư viên Auth
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*...........................................*/
    public $pc = 'page.client';
    public $pe = 'page.error';
    public $pa = 'page.auth';
    /*------------------------------------------*/

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(){
        return view($this->pa.'.login');
    }

    public function postLogin(LoginRequest $rq){
        if (Auth::attempt(['name' => $rq->name, 'password' => $rq->password],$rq->remember)||
            Auth::attempt(['email' => $rq->name, 'password' => $rq->password],$rq->remember)) {
            return redirect(route('admin'));
        }
        else 
            return back()->with('msg','Wrong username / passeword');
    }
     public function logout(){
        Auth::logout();
        return redirect()->route('homepage');
    }
}