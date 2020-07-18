<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Str;
use Socialite;
use App\User;

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
    // github start
    public function github(){
        return Socialite::driver('github')->Redirect();

    }
    public function redirect1(){
       $user=Socialite::driver('github')->user();
       
        $user1= USER::firstOrCreate([
            'email'=> $user->email,
             'name'=> $user->name

        ],
        [
           
            'password'=> Hash::make(Str::random(24))
        

        ]);

        Auth::login($user1,true);
        return redirect('/home'); 


    }
    //enf github
    //google start
      public function googleindex(){
        return Socialite::driver('google')->Redirect();

    }
    public function googleredirect(){
       $user=Socialite::driver('google')->user();
      // dd($user);
        $user1= USER::firstOrCreate([
            'email'=> $user->email,
             'name'=> $user->name

        ],
        [
           
            'password'=> Hash::make(Str::random(24))
        

        ]);

        Auth::login($user1,true);
        return redirect('/home'); 


    }
    //google end
    //facebook start
        public function facebookindex(){
        return Socialite::driver('facebook')->Redirect();

    }
    public function facebookredirect(){
       $user=Socialite::driver('facebook')->user();
      // dd($user);
        $user1= USER::firstOrCreate([
            'email'=> $user->email,
             'name'=> $user->name

        ],
        [
           
            'password'=> Hash::make(Str::random(24))
        

        ]);

        Auth::login($user1,true);
        return redirect('/home'); 


    }
    //facebook end
}
