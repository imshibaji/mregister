<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Carbon\Carbon;

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
     protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
      return view('admin.login');
    }

    public function login(Request $req)
    {

      if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'status'=>'active']) || Auth::attempt(['mobile' => $req->email, 'password' => $req->password, 'status'=>'active'])) {
          // Authentication passed...
          $usr = User::find(auth()->user()->id);
          $usr->visitor = ip();
          $usr->save();
          return $this->sendLoginResponse($req);
      }


      $errors = [$this->username() => trans('auth.failed')];

      return redirect()->back()
          ->withInput($req->only($this->username(), 'remember'))
          ->withErrors($errors);
    }
    //
    public function logout() {
        $usr = User::find(auth()->user()->id);
        $usr->last_logout= new Carbon();
        $usr->save();

        Auth::logout();
        return redirect('/');
    }
}
