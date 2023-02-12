<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UpgradeController extends Controller
{


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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }


     /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if($user->citie_id!=null){
            $citie = $user->citie_id;
        }else{
            $citie = null;
        }

        return view('auth.upgrade')->with([
            'user' => $user,
            'cities' => [],
            'citie' => $citie,
        ]);
    }

    public function store(Request $request)
    {

        if($request->password == $request->password_confirmation){

                    $user = Auth::user();
                    $user->firstname = $request->firstname;
                    $user->lastname = $request->lastname;
                    $user->identification = $request->identification;
                    $user->cellphone = $request->cellphone;
                    $user->address = $request->address;
                    $user->citie_id = $request->citie;
                    $user->email = $request->email;
                    $user->password = $request->password;
                    $user->remember_token = Str::random(60);
                    $user->validation = 1;
                    $user->setting = 1;
                    $user->terms = 1;
                    $user->save();

                    $this->guard()->login($user);

                    return response()->json(['status'=>"success"]);


        }else{
                return response()->json(['status'=>"error", 'option'=> 'password']);

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


}
