<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Password;

use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{

    protected $redirectTo = '/home';

    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function showResetForm(Request $request, $token)
    {

        return view('auth.passwords.reset')->with(
            ['token' => $request->token, 'email' => $request->token]
        );

    }

    public function reset(Request $request){

        if($request->password == $request->password_confirmation){

            $user = User::orWhere('email', $request->email)->first();

            if($user!= null){

                $email = $user->email;
                $user->password = $request->password;
                $user->remember_token = Str::random(60);
                $user->save();

                $this->guard()->login($user);

                $role = $user->role;

                switch ($role){
                    case 'admin' :
                        return redirect()->route('manager.dashboard');
                        break;
                    case 'customer' :
                        return redirect()->route('customer.dashboard');
                        break;
                    case 'enterprise' :
                        return redirect()->route('enterprise.dashboard');
                        break;
                }


            }

        }else{

            return redirect()->back()
                ->withInput($request->only($this->username(), 'remember'))
                ->withErrors([
                    $this->username() => "El correo o cedula  no coincide con nuestros registros.",
                ]);

        }

    }

    public function username(){
        return 'email';
    }


    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|confirmed|min:6',
        ];
    }

    protected function validationErrorMessages()
    {
        return [];
    }

    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation'
        );
    }

    protected function resetPassword($user, $password)
    {
        $user->forceFill([
            'password' => bcrypt($password),
            'remember_token' => Str::random(60),
        ])->save();

        $this->guard()->login($user);

    }

    protected function sendResetResponse($response)
    {
        return trans($response);
    }


    public function broker()
    {
        return Password::broker();
    }

    protected function guard()
    {
        return Auth::guard();
    }



}


