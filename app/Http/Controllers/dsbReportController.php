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

    // Survey nav
    public function builder(){
        return view('dsb.reports.builder',['title' => 'Survey Builder', 'activeparents' => 'User']);
    }
    public function surveylist(){
        return view('dsb.reports.surveylist',['title' => 'Survey List', 'activeparents' => 'User']);
    }
}
