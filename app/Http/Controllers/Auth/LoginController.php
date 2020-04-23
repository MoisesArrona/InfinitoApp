<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

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
    protected $redirectTo = 'producto/create';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //Redirecciona a login al cerrar sesión
    protected function loggedOut(Request $request) {
        return redirect('/');
    }

    //Redireccionar segun rol
    public function redirectPath()
    {
        if (auth()->user()->id_rol == 1) 
        {
            return '/administrador';
        }
        else if (auth()->user()->id_rol == 2)
        {
            return '/personal';
        }
        else
        {
            return '/cliente';
        }
    }
}
