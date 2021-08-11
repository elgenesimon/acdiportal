<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv_AHRIS_REC';
    protected $table = 'personal_details';
    protected $fillable = ['firstName', 'lastName', 'middleName', 'dateOfBirth', 'mobileNo', 'email', 'gender', 'civilStatus', 'isActive', 'employeeID'];


    public function getEmergencyContact(){
        return $this->hasOne('App\Models\PersonalEmergencyContact', 'employeeID', 'employeeID');
    }



}
