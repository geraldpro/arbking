<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmAccount;
use App\Role;
use App\User;
use App\RoleApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Config;
use App\Exceptions\Handler\InvalidConfirmationCodeException;


class UserController extends Controller{

//Get user login page
public function login(){
  return view('useradmin.login')->with(compact('roles'));
} 
public function email(){
  return view('email.verify');
}
public function reconfirm(){
  return view('useradmin.reconfirm_email')->with(compact('roles'));
}
public function logout()
  {
      Auth::logout();
    //   Session::flush();
      return redirect()->route('login')->with('success', 'Logged out, please login to continue');
  }
//Get user register page
    public function register(){
        return view('useradmin.register')->with(compact('roles'));
    }
    public function roleApplication(){
        $roles = Role::where('id', '!=', Config::get('constants.roles.user'))->get();
        return view('useradmin.apply_role')->with(compact('roles'));
    }
//Register a user
    public function postSignup(Request $request)
    {
        //$state =  (int)Input::get('state');
        // dd($request->all());
        $rules = array(
            'email' => 'required|unique:users|min:4',
            'password' => 'required|min:6',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'confirm_password' => 'required|same:password',
        );

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $data = $request->all();
            $confirmation_code = str_random(30);
            $data['confirmation_code'] = $confirmation_code;
            $data['password'] = Hash::make($request->get('password'));
            $data['role_id'] = Config::get('constants.roles.user');
            $user = new User();
            // dd($data);
            $user->fill($data);
            if ($user->save()) {
                Mail::to($request->get('email'))->send(new ConfirmAccount($user));
                // return Redirect::route('getSignup')->with('success', 'you registered successfully please check your email for your account activation mail');
                return redirect()->route('login')->with('success', 'You have registered successfully');
            } else {
                console.log('cool');
            //     return Redirect::route('getSignup')->with('fail', 'an error occurred while creating your profile');
                return  redirect()->back()->with('fail', 'An error occured while trying to sign you up')->withInput();
            }
        }
    }
    //post role Application
    public function postApplication(Request $request)
    {
        //$state =  (int)Input::get('state');
        $rules = array(
            'email' => 'required|unique:users|min:4',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'role_id' => 'required'
        );

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $data = $request->all();
            $data['role_id'] = Config::get('constants.roles.user');
            $role_application = new RoleApplication();
            $role_application->fill($data);
            if ($role_application->save()) {
                // return Redirect::route('getSignup')->with('success', 'you registered successfully please check your email for your account activation mail');
                return redirect()->route('login')->withSucess('You have registered successfully');
            } else {
            //     return Redirect::route('getSignup')->with('fail', 'an error occurred while creating your profile');
                return  redirect()->back()->withErrors('An error occured while trying to sign you up')->withInput();
            }
        }
    }
    public function getConfirmation($confirmation_code)
    {
        if( ! $confirmation_code)
        {
             return redirect()->route('dashboard')->withFail('You used an invalid registration link/token');
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();
        if ( ! $user)
        {
            return redirect()->route('dashboard')->withFail('You used an invalid registration link/token');
        }
        $email = $user->email;
        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();
        // $request->session()->put('confirmation_code', $confirmation_code);
        // $request->session()->put('email', $email);
        // return Redirect::route('pUpdate')->with('success', 'confirmation successful, please kindly update your personal details');
        return redirect()->route('dashboard')->withSuccess('You have successfully confirmed your account please update ur account on ur dashboard');
    }
    public function confirmAgain(Request $request){
        $rules = array(
            'email' => 'required|min:4',
        );

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else{
        $user = $request->get('email');
        $user = User::where('email', '=', $user)->first();
        if($user && $user->id){
           $confirmation_code = str_random(30);
           $user->confirmation_code = $confirmation_code;
           if($user->update()){
                Mail::to($request->get('email'))->send(new ConfirmAccount($user));
                // return Redirect::route('getSignup')->with('success', 'you registered successfully please check your email for your account activation mail');
                return redirect()->route('dashboard')->withSuccess('Check your mail your activation link has been sent, you can only login as a full user after confirming your account via the link.');
        }
        else {
            //     return Redirect::route('getSignup')->with('fail', 'an error occurred while creating your profile');
                return  redirect()->back()->withErrors('An error occured while trying to resend your activation link')->withInput();
            }
        }
        else {
            //     return Redirect::route('getSignup')->with('fail', 'an error occurred while creating your profile');
                return  redirect()->back()->withErrors('Check your email, a user with this email cannot be found')->withInput();
            }
        }
    }
    	public function postLogin(Request $request){
		$validate = Validator::make($request->all(), array(
			'email' => 'required|min:4',
			'password' => 'required|min:6',
		));
		if ($validate->fails()) {
			return back()->withErrors($validate)->withInput();
		} else {
			$auth = Auth::attempt(array(
				'email' => $request->get('email'),
				'password' => $request->get('password')
			));
			if ($auth) {
				return redirect()->intended('user/dashboard')->with('success', 'You have successfully logged in');
			}
			else{
				return back()->with('fail', 'invalid username or password')->withInput();
			}
		}
	}
}
