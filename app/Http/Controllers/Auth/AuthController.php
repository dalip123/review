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
    public function redirectToProvider()
    {
        $fb = App::make('SammyK\LaravelFacebookSdk\LaravelFacebookSdk');
        $login_link = $fb
            ->getRedirectLoginHelper()
            ->getLoginUrl('http://glide.ezmart.in/social/login/facebook',['manage_pages']);
      return redirect($login_link);
    }
    public function handleProviderCallback()
    {
        $fb = App::make('SammyK\LaravelFacebookSdk\LaravelFacebookSdk');
      
          try {
        $token = $fb
            ->getRedirectLoginHelper()
            ->getAccessToken();
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        // Failed to obtain access token
        dd($e->getMessage());
    }
          $fb->setDefaultAccessToken($token);
           try {
        $response = $fb->get('/genithub?fields=access_token');
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }

     $pageToken=$response->getAccessToken(); 
      $rating = $fb->get('/genithub/ratings?access_token='.$pageToken);
      dd($rating);
    }
}
