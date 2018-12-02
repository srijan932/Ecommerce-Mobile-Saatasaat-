<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $credentials['is_Admin']=1;
            // dd(Auth::attempt($credentials));
            if (Auth::attempt($credentials)) {
                //user is admin
                return redirect('/admin/dashboard');
            }else{
                //user isn't admin
                return redirect('/');
            }
        }else{
            //redirect back with a message.
             throw ValidationException::withMessages([
            $this->username() => [trans('Invalid Username')],
        ]);
        }
    }

}
