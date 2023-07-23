<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    private $user, $users = [];

    public function dashboard()
    {
        $role = Auth::user()->role;
        $user_name = Auth::user()->name;
        if ($role == '1')
        {
            return view('admin.dashboard.dashboard',compact('user_name'));
        }
        elseif($role == '0')
        {
            return view('public.dashboard.dashboard',compact('user_name'));
        }
    }

    public function users()
    {
        $this->users = User::all();
        return view('admin.user.user',['users' => $this->users]);
    }

    public function changeRole($id)
    {
        $getRole = User::select('role')->where('id',$id)->first();
        if($getRole->role == 1)
        {
            $role = 0;
        }
        elseif($getRole->role == 0)
        {
            $role = 1;
        }
        User::where('id',$id)->update(['role'=>$role]);
        return back()->with('message','Role changed successfully.');
    }

    public function changeBanStatus($id)
    {
        $banned = User::select('ban_status')->where('id',$id)->first();
        if($banned->ban_status == 1)
        {
            $banStatus = 0;
        }
        elseif($banned->ban_status == 0)
        {
            $banStatus = 1;
        }
        User::where('id',$id)->update(['ban_status'=>$banStatus]);
        return back()->with('message','Selected user Ban status changed successfully.');
    }

    public function usersDetail($id)
    {
        $this->user = User::find($id);
        return view('admin.user.detail',['user' => $this->user]);
    }

    public function deleteUser($id)
    {
        User::deleteUser($id);
        return back()->with('message','User delete successfully.');
    }
}
