<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Facebook;
use App;
use Session;
use DB;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function redirectToProvider($path)
    {
    return Socialite::driver($path)->redirect();    
    }
    public function handleProviderCallback($path)
    {
        
       $user = Socialite::driver($path)->user();
       $name= $user->getName();
       $reviewActive=false;
       if($path=='facebook')
       {
      $namecheck=DB::table('social_id')->where('facebook_name',$name)->first(); 
       }
       else
       {
        $namecheck=DB::table('google')->where('google_name',$name)->first();
       }
       
       if(!empty($namecheck))
       $reviewActive=true;
       return redirect()->route('index')->with('reviewActive',$reviewActive);
       
    }
    public function index()
    {
        return view('index');
    }
}
