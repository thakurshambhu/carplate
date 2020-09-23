<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

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
    protected $redirectTo = '/user_login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //echo "<pre>sss";
        //dd(request()->segment(count(request()->segments())));
                // print_r(url()->previous()); die;
        // if(){
        //     Session::put('random_id', $rand);
        // }
        
        $this->middleware('guest')->except('logout');
    }

    public function admin()
    {
        return view('admin.login');
    }
}
