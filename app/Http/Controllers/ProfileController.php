<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function profile()
    {
        $user_id = Auth::user()->id;

        $user = DB::table('users')
            ->where('id', $user_id)
            ->latest('id')
            ->first();

        return view('profile.profile', compact('user'));
    }
    public function updatepersonalinfo(Request $request)
    {
        $user_id = Auth::user()->id;

        $user = DB::table('users')
            ->where('id', $user_id)
            ->latest('id')
            ->first();

        $profile_image = $request->file('image');
        $name = $request->name;
        $email = $request->email;

        if ($profile_image != null && $name != null && $email != null) {

            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($profile_image->getClientOriginalExtension());
            $image_name = $name_gen . '.' . $image_ext;
            $up_location = 'storage/profile/';
            $last_image = $up_location . $image_name;
            $profile_image->move($up_location, $image_name);

            $upd = array();
            $upd['name'] = $name;
            $upd['email'] = $email;
            $upd['profile_photo_path'] = $last_image;
            DB::table('users')->where('id', $user_id)->update($upd);
        } elseif ($profile_image != null && $name != null && $email == null) {

            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($profile_image->getClientOriginalExtension());
            $image_name = $name_gen . '.' . $image_ext;
            $up_location = 'storage/profile/';
            $last_image = $up_location . $image_name;
            $profile_image->move($up_location, $image_name);

            $upd = array();
            $upd['name'] = $name;
            $upd['profile_photo_path'] = $last_image;
            DB::table('users')->where('id', $user_id)->update($upd);
        } elseif ($profile_image != null && $name == null && $email != null) {

            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($profile_image->getClientOriginalExtension());
            $image_name = $name_gen . '.' . $image_ext;
            $up_location = 'storage/profile/';
            $last_image = $up_location . $image_name;
            $profile_image->move($up_location, $image_name);

            $upd = array();
            $upd['email'] = $email;
            $upd['profile_photo_path'] = $last_image;
            DB::table('users')->where('id', $user_id)->update($upd);
        } elseif ($profile_image != null && $name == null && $email == null) {

            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($profile_image->getClientOriginalExtension());
            $image_name = $name_gen . '.' . $image_ext;
            $up_location = 'storage/profile/';
            $last_image = $up_location . $image_name;
            $profile_image->move($up_location, $image_name);

            $upd = array();
            $upd['profile_photo_path'] = $last_image;
            DB::table('users')->where('id', $user_id)->update($upd);
        } elseif ($profile_image == null && $name != null && $email != null) {

            $upd = array();
            $upd['name'] = $name;
            $upd['email'] = $email;
            DB::table('users')->where('id', $user_id)->update($upd);
        } elseif ($profile_image == null && $name == null && $email != null) {

            $upd = array();
            $upd['email'] = $email;
            DB::table('users')->where('id', $user_id)->update($upd);
        } else {

            $upd = array();
            $upd['name'] = $name;
            DB::table('users')->where('id', $user_id)->update($upd);
        }

        Alert::success('Success!', 'Data successfully update');
        return Redirect()->route('profile');
    }
    public function destroy($id)
    {
        User::find($id)->delete();

        Alert::success('Your account has been succesfully deleted!', 'You won\'t be able to revert this!');
        // return back();
        return Redirect()->route('login');
    }

    public function registeruser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_type = $request->user_type;
        $user->save();

        return Redirect()->route('login');
    }
}
