<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalAddress extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv_AHRIS_REC';
    protected $table = 'personal_address';
}
