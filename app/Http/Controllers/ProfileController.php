<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Match;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Image;

class ProfileController extends Controller{

//Get dashboard index

public function profile(){
  $user = Auth::user();
  return view('user.profile')->with(compact('user'));

}
public function updateProfile(Request $request){
	        $rules = array(
            'first_name' => 'sometimes|min:3',
            'last_name' => 'sometimes|min:3',
            'country' => 'sometimes|min:3',
            'gender' => 'sometimes',
            'dob' => 'sometimes',
            'wallet_address' => 'sometimes',
            'phone_number' => 'sometimes',
        );

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $data = $request->all();
            $user = Auth::user();
            $user->fill($data);
            if ($user->update()) {
				// dd('success');
                return redirect()->back()->withSuccess('Profile updated successfully');
            } else {
				// dd(fail);
            //     return Redirect::route('getSignup')->with('fail', 'an error occurred while updating your profile');
                return  redirect()->back()->with('fail', 'an error occured while trying to update your profile')->withInput();
            }
        }  
  }
  public function updatePassword(Request $request){
	        $rules = array(
            'old_password' => 'required',
            'new_password' => 'required|min:6',
        );

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $data = $request->all();
            $user = Auth::user();
		    $password = $user->password;
			// dd($request->get('old_password'));
			$old_password = $request->get('old_password');
			// dd($password, $old_password);
			if(Hash::check($old_password, $password)){
				$user->password = Hash::make($request->get('new_password'));
            if ($user->update()) {
				// dd('success');
                return redirect()->back()->withSuccess('Password changed successfully');
            } else {
				// dd(fail);
            //     return Redirect::route('getSignup')->with('fail', 'an error occurred while updating your password');
                return  redirect()->back()->with('fail', 'an error occured while trying to update your profile')->withInput();
            }
			}
			else{
				return  redirect()->back()->with('fail', 'Your old password is not correct')->withInput();
			}
        }  
  }
   public function changePicture(Request $request){
	        $rules = array(
            'profile_image' => 'required',
        );
        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
		$user = Auth::user();
		$image = $request->file('profile_image');
		$img = str_replace(' ', '-', $image->getClientOriginalName());
		$cool = strlen($img);
		if($cool > 40){
          $initial = $cool-30;
          $img = substr($img, $initial);
		}
                // dd($img);
		$imagename = time() . "-" . $img;
                //dd($imagename);
		Image::make($image->getRealPath())->resize(640, 480, function ($constraint) {
        $constraint->aspectRatio();})->save(public_path() . '/images/profile/' . $imagename);
		$image_url = '/images/profile/' .$imagename;
		$user->profile_pic = $image_url;
            if ($user->update()) {
				// dd('success');
                return redirect()->back()->withSuccess('Picture changed successfully');
            } else {
				// dd(fail);
            //     return Redirect::route('getSignup')->with('fail', 'an error occurred while updating your password');
                return  redirect()->back()->with('fail', 'an error occured while trying to change your picture')->withInput();
            }
        }  
  }
}
