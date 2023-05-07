<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully ',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }

    public function Profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

       return view('admin.adminProfilePage',compact('adminData'));
    }

    public function editAdminProfile()
    {
        $id = Auth::user()->id;
        $editadminData = User::find($id); 
       return view('admin.editAdminProfilePage',compact('editadminData'));
    }

    public function storeAdminData(Request $request)
    {
       $id = Auth::user()->id;

       $data = User::find($id);
       $data->name = $request->username;
       $data->email = $request->email;
      

        if($request->file('profile_img'))
        {
            $file = $request->file('profile_img');  
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('upload/admin_img'),$fileName);
            $data['profile_image'] = $fileName;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return \redirect()->route('admin.profile')->with($notification);
    }

    public function changePassword()
    {
       return view('admin.changePasswordPage');
    }

    public function savePassword(Request $request)
    {
           $validate = $request->validate([
            'oldPassword' =>'required',
            'newPassword' =>'required|string|min:8',
            'confirmPassword'=> 'required|string|min:8|same:newPassword'
           ]);

            $data = $request->all();
            $successPswd = User::updatePassword($data);

            if($successPswd)
            {  
                session()->flash('message','Admin Password Changed Successfully');
                return \redirect('/');
            }
            else
            {
                session()->flash('message','Admin Password Not Match');
                return \redirect()->back();
            }
    }
}
