<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dsbCreatorController extends Controller
{
    public function profile(){
        return view('dsb.creator.profile',['title' => 'Admin Profile', 'activeparents' => 'Profile']);
    }
    public function settings(){
        return view('dsb.creator.settings',['title' => 'Admin Settings', 'activeparents' => 'Profile']);
    }

    //Dashboard nav
    public function request(){
        return view('dsb.creator.request',['title' => 'Request', 'activeparents' => 'Dashboard']);
    }

    // Survey nav
    public function builder(){
        return view('dsb.creator.builder',['title' => 'Survey Builder', 'activeparents' => 'User']);
    }
    public function surveylist(){
        return view('dsb.creator.surveylist',['title' => 'Survey List', 'activeparents' => 'User']);
    }
}