<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Profile;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RedirectsUsers;


    /**
     * Where to redirect users after registration.
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
        //$this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistration()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {


            if($request->password == $request->password_confirmation){

                if (!User::where('email', $request->email)->first() ) {

                    $user = new User;
                    $token = User::generate();
                    $user->email = $request->email;
                    $user->terms = 1;
                    $user->page = 1;
                    $user->validation = 1;
                    $user->token = $token;
                    $user->role = 'customer';
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

                }else{
                    return redirect()->back()
                    ->withInput($request->only('email'))->withErrors([
                        $this->username() => "El correo ya registros.",
                    ]);
                }

            }else{

                return redirect()->back()
                    ->withInput($request->only("password", 'remember'))
                    ->withErrors([
                        'password' => "Las contraseñas no coinciden",
                ]);
            }

    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

}
