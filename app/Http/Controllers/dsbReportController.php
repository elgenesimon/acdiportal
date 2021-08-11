<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dsbReportController extends Controller
{
    public function profile(){
        return view('dsb.reports.profile',['title' => 'Admin Profile', 'activeparents' => 'Profile']);
    }
    public function settings(){
        return view('dsb.reports.settings',['title' => 'Admin Settings', 'activeparents' => 'Profile']);
    }

    //Dashboard nav
    public function request(){
        return view('dsb.reports.request',['title' => 'Request', 'activeparents' => 'Dashboard']);
    }
    public function reports(){
        return view('dsb.reports.reports',['title' => 'Report Generator', 'activeparents' => 'Dashboard']);
    }
}
