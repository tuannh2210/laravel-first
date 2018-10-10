<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\PasswordResets;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

// use hash;
use Carbon\Carbon;
use App\Model\User;

use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function forget(Request $rq){
        $pwReset = PasswordResets::where('email',$rq->email)->delete();
        $user = User::where('email',$rq->email)->first();
        $token = (str_random(40));
        $now = Carbon::now();
        $pwReset = new PasswordResets;
        $pwReset->email = $rq->email;
        $pwReset->token = $token;
        $pwReset->created_at = $now;
        $pwReset->save();
        $action_url =url('/reset-password/'.$token);
        $url = url('/');

        // Send mail
        Mail::send('page.mail.reset-password', compact('token','user','action_url','url'),function($mgs) use ($user){
            $mgs->to($user->email,$user->name);

            // $mgs->cc('tuannhph04848@fpt.edu.vn', 'Nguyen tuan');
            // $mgs->replyTo('tuannhph04848@gmail.com','Tuan nguyen');
            $mgs->subject('Lấy lại mật khẩu ');
        });
    }
}
