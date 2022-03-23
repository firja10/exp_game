<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1 && auth()->user()->email_verified_at != NULL) {
                return redirect('admin/home');
            }

            elseif((auth()->user()->is_member == 1 && auth()->user()->email_verified_at != NULL))
            {
                return redirect('member/home');
            }
            
            
            else{
                Auth::logout();
                return redirect('login')->with('error_admin','Maaf Anda Bukan Admin, Silakan Tunggu Verifikasi Jika Sudah Mendaftar');
            }
            
        }else{
            return redirect('login')
                ->with('error','Maaf Anda Salah Memasukkan Email / Password');
        }
          
    }









}
