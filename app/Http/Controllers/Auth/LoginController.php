<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class LoginController extends Controller
{

    use RedirectsUsers, ThrottlesLogins;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

    public function showLoginForm()
    {
        $user = User::auth();

        if($user!=null){

            $routes = $user->role->slug;

            switch ($routes){
                case 'managers' :
                    return redirect()->route('manager.dashboard');
                    break;
            }

        }else{
            return view('auth.login');
        }

    }

    public function login(Request $request){

        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request){
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function credentials(Request $request)
    {
        $login = $request->input($this->username());
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : '';
        return [ $field => $login, 'password' => $request->input('password')];
    }

    protected function sendLoginResponse(Request $request)
    {

            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            $user = $this->guard()->user();

            if($user->available == 1){

                $routes = $user->role->slug;

                switch ($routes) {
                    case 'managers':
                        return redirect()->route('manager.dashboard');
                        break;
                }
                
            }else{

                $this->guard()->logout();

                $request->session()->invalidate();

                return view('auth.disabled')->with([]);

            }

    }

    public function redirectPath()
    {
        $user = User::auth()->user();

        $routes = $user->role->slug;

        switch ($routes) {
            case 'managers':
                return redirect()->route('manager.dashboard');
                break;
        }

    }

    protected function authenticated(Request $request, $user)
    {
        $routes = $user->role->slug;

        switch ($routes) {
            case 'managers':
                return redirect()->route('manager.dashboard');
                break;
        }
    }

    protected function sendFailedLoginResponse(Request $request)
    {

        if ( ! User::where('email', $request->email)->first() ) {
            return redirect()->back()
                ->withInput($request->only($this->username(), 'remember'))
                ->withErrors([
                    $this->username() => "El correo o cedula no coincide con nuestros registros.",
                ]);
        }

        if ( ! Hash::check($request->password, User::where('email', $request->email)->first()->password) ) {

            return redirect()->back()
                ->withInput($request->only($this->username(), 'remember'))
                ->withErrors([
                    'password' => "Password incorrecta",
                ]);
        }
    }

    public function username()
    {
        return 'email';
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
