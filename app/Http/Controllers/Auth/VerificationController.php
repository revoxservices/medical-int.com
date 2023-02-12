<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Foundation\Auth\VerifiesEmails;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


use App\Mail\Verify\VerifyEmail as Verify;


class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */


    /**
     * Where to redirect users after verification.
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
        //$this->middleware('auth');
       // $this->middleware('signed')->only('verify');
        //$this->middleware('throttle:120,1')->only('verify', 'resend');
    }


     /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }


    /**
     *
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }else{
            $request->user()->sendEmailVerificationNotification();
            return view('auth.verify');
        }


    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {

        if (! hash_equals((string) $request->route('id'), (string) User::id($request->route('id'))->getKey())) {
            throw new AuthorizationException;
        }

        //dd(sha1($request->user()->getEmailForVerification()));
        if (! hash_equals((string) $request->query('hash'), sha1(User::id($request->route('id'))->getEmailForVerification()))) {
            throw new AuthorizationException;
        }

        if (User::id($request->route('id'))->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }


        if (User::id($request->route('id'))->markEmailAsVerified()) {
            $request->user()->sendEmailVerificationNotification();
            event(new Verified(User::id($request->route('id'))));
        }

        return redirect()->route('verified')->with('verified', true);

    }





    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verified()
    {
        return view('pages.views.verified.verified');
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }


}
