<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PersonalDetails;
use App\Models\EmployeeDetails;

class AhrisAccessController extends Controller
{
    //---------------------------------------------------- Access Manager ------------------------------------------//

        //------------- Admin Navigation -----------------//

        //Profile nav
        public function profile(){
            return view('ahris.access.profile',['title' => 'Admin Profile', 'activeparents' => 'Profile']);
        }
        public function settings(){
            return view('ahris.access.settings',['title' => 'Admin Settings', 'activeparents' => 'Profile']);
        }

        //Dashboard nav
        public function reports(){
            return view('ahris.access.reports',['title' => 'Reports', 'activeparents' => 'Dashboard']);
        }
        public function wall(){
            return view('ahris.access.wall',['title' => 'Freedom Wall', 'activeparents' => 'Dashboard']);
        }

        // Users nav
        public function activeusers(){
            return view('ahris.access.users',['title' => 'Active User', 'activeparents' => 'User']);
        }
        public function adduser(){
            $list = PersonalDetails::orderBy('lastName')->get();
            return view('ahris.access.adduser',['title' => 'Add User', 'activeparents' => 'User'],compact('list'));
        }
        public function accessrequest(){
            return view('ahris.access.accessrequest',['title' => 'Access Request', 'activeparents' => 'User']);
        }

        //------------- Super Admin Navigation End-----------------//

        /*
        public function finddata(Request $request){
            $data=PersonalDetails::select('employeeID', 'lastName', 'firstName', 'middleName','email', 'gender' )->where('employeeID',$request->id)->take(100)->get();
            return response()->json($data);
        }
        */

       
        /* connected to sa access/adduser.blade.php after ng select picture */
        public function finddata(Request $request){
            $data=PersonalDetails::with('getEmergencyContact')
            ->select('employeeID', 'lastName', 'firstName', 'middleName','email', 'gender')
            ->where('employeeID',$request->id)
            ->take(100)
            ->get();
            //dd($data);
            return response()->json($data);
        }
        




        //---------------------------------------------------- Super Admin End ----------------------------------dsa--------//
}
