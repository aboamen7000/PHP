<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function Admin_Dashboard(){
        return view('admin.index');
    }// End Method


    public function Admin_Login(){
        return view('admin.admin_login');
    }// End Method

        public function Admin_Profile(){
            $id = Auth::user()->id;
            $Admin_Data = User::find($id);
            return view('admin.admin_profile_view',compact('Admin_Data'));
    }// End Method

        /**
     * Destroy an authenticated session.
     */
    public function Admin_Logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }// End Method

}
