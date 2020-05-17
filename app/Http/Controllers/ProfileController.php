<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function create(){
    return view('after-auth.profile');
  }

  public function deleteImage(){
    $id = Auth::user()->id;
    $user = User::find($id);
    $user->user_photo = null;
    $user->save();

    session()->flash('snackbar-message', "Image Removed Successfully!");
    return back();
  }

  public function update(Request $request) {
    $this->validate($request,[
      'role' => ['required', 'numeric'],
      'address' => ['string'],
      'phone_number' => ['numeric', 'digits: 7'],
      'password' => ['string', 'min:8', 'confirmed', 'nullable'],
      'user_photo' => 'image|mimes:png,jpg,jpeg|max:1000'
    ]);

    $formInput = $request->except(['_method', '_token', 'username', 'email', 'trader_category', 'role', 'password_confirmation']);

    //if password field is set, use new password else use the old one
    if (isset($formInput['password'])) {
      $formInput['password'] = Hash::make( $formInput['password']);
    }else{
      $formInput['password'] = Auth::user()->password;
    }

    $user = User::findOrFail(Auth::user()->id);

    if ($request->file('user_photo')) {
      $image = $request->file('user_photo');
      if($image->isValid()){
        $fileName = time() . '-' . Str::slug($user['username'], "-") . '.' . $image->getClientOriginalExtension();
        $filePath = public_path('uploads/profile/' . $fileName);

        //Resize Image
        Image::make($image)->resize(350, 350)->save($filePath);
        $formInput['user_photo'] = $fileName;
      }
    }else{
      $formInput['user_photo'] = Auth::user()->user_photo;
    }

    $id = Auth::user()->id;
    DB::table('users')
      ->where('id', $id)
      ->update($formInput);
    
    session()->flash('snackbar-message', "Profile Updated Successfully!");
    return back();
  }
}
