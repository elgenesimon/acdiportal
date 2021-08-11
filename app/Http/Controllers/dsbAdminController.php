<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dsbAdminController extends Controller
{
    public function profile(){
        return view('dsb.admin.profile',['title' => 'Admin Profile', 'activeparents' => 'Profile']);
    }
    public function settings(){
        return view('dsb.admin.settings',['title' => 'Admin Settings', 'activeparents' => 'Profile']);
    }

    //Dashboard nav
    public function reports(){
        return view('dsb.admin.reports',['title' => 'Reports', 'activeparents' => 'Dashboard']);
    }
    

    // Users nav
    public function activeusers(){
        return view('dsb.admin.users',['title' => 'Active User', 'activeparents' => 'User']);
    }
    public function adduser(){
        return view('dsb.admin.adduser',['title' => 'Add User', 'activeparents' => 'User']);
    }
}
