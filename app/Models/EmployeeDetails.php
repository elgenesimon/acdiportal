<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv_AHRIS';
    protected $table = 'employee_employment';
    protected $fillable = ['employeeID', 'areaOperationID', 'businessLineID', 'groupID', 'divisionID',
    'departmentID', 'sectionID', 'branchCode', 'designationID', 'positionID', 'rankID', 'jobGrade'];


}
