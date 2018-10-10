<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Http\Requests\ResetRequest;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Model\PasswordResets;
use App\Model\user;
use Carbon\Carbon;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function reset_password($token){
        $pwReset = PasswordResets::Where('token',$token)->first();
        // dd($pwReset);
        $dateForget = Carbon::createFromFormat('Y-m-d H:i:s',$pwReset->created_at);
        $now = Carbon::now();

        $diff = $now->diffInHours($dateForget);

        if($diff > 24){
            $pwReset->delete();
            return route('hompage');
        }
        return view('page.auth.reset-pw',compact('token'));
    }
    public function save_reset_password(Request $rq){
        $pwReset = PasswordResets::Where('token',$rq->token)->first();
        // dd($pwReset->created_at);
        $dateForget = Carbon::createFromFormat('Y-m-d H:i:s',$pwReset->created_at);
        $now = Carbon::now();

        $diff = $now->diffInHours($dateForget);

        if($diff > 2){
            $pwReset->delete();
            return route('hompage');
        }

        $user = User::Where('email',$pwReset->email)->first();
        $user->password = Hash::make($rq->password);
        $user->save();


    }
}
