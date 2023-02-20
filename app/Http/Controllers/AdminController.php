<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
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

        return \redirect()->route('admin.profile');
    }
}
