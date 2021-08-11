<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;




class DashboardController extends Controller
{   
        //------------- Role Validator -----------------//
        public function index()
        {
            if(Auth::user()->hasRole('superadministrator')){
                return view('superadmin.monitoring',['title' => 'Monitoring', 'activeparents' => 'Dashboard']);
            }


            

            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////------- AHRIS -------- ////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
            // AHRIS admin
            if(Auth::user()->hasRole('admin-ahris')){
                return view('ahris.admin.monitoring',['title' => 'Monitoring', 'activeparents' => 'Dashboard']);
            }

            
            // AHRIS access manager
            if(Auth::user()->hasRole('admin-access')){
                return view('ahris.access.monitoring',['title' => 'Monitoring', 'activeparents' => 'Dashboard']);
            }

            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////------- AHRIS END-------- /////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////DYNAMIC SURVEY BUILDER ////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            // Dynamic Survey Builder admin
            if(Auth::user()->hasRole('admin-survey')){
                return view('dsb.admin.monitoring',['title' => 'Monitoring', 'activeparents' => 'Dashboard']);
            }

            // Dynamic Survey Builder creator
            if(Auth::user()->hasRole('creator-survey')){
                return view('dsb.creator.monitoring',['title' => 'Monitoring', 'activeparents' => 'Dashboard']);
            }

            // Dynamic Survey Builder reports
            if(Auth::user()->hasRole('report-survey')){
                return view('dsb.reports.monitoring',['title' => 'Monitoring', 'activeparents' => 'Dashboard']);
            }



            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////DYNAMIC SURVEY BUILDER END/////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



            elseif(Auth::user()->hasRole('administrator')){
                return view('admin.dashboard');
            }
            elseif(Auth::user()->hasRole('heads')){
                return view('heads.dashboard');
            }
            elseif(Auth::user()->hasRole('emp')){
                return view('emp.dashboard');
            }
        }
        //------------- Role Validator End -----------------//

        //---------------------------------------------------- Super Admin ------------------------------------------//

        //------------- Super Admin Navigation -----------------//

        //Profile nav
        public function spadminprofile(){
            return view('superadmin.profile',['title' => 'Admin Profile', 'activeparents' => 'Profile']);
        }
        public function spadminsetings(){
            return view('superadmin.settings',['title' => 'Admin Settings', 'activeparents' => 'Profile']);
        }

        //Dashboard nav
        public function spadminreports(){
            return view('superadmin.reports',['title' => 'Reports', 'activeparents' => 'Dashboard']);
        }
        public function spwall(){
            return view('superadmin.wall',['title' => 'Freedom Wall', 'activeparents' => 'Dashboard']);
        }

        // Users nav
        public function activeusers(){
            return view('superadmin.users',['title' => 'Active User', 'activeparents' => 'User']);
        }
        public function adduser(){
            return view('superadmin.adduser',['title' => 'Add User', 'activeparents' => 'User']);
        }
        public function accessrequest(){
            return view('superadmin.accessrequest',['title' => 'Access Request', 'activeparents' => 'User']);
        }

        //Systems nav
        public function ahris(){
            return view('superadmin.ahris',['title' => 'AHRIS - Monitoring', 'activeparents' => 'System']);
        }

        //------------- Super Admin Navigation End-----------------//

        //---------------------------------------------------- Super Admin End ------------------------------------------//

}