<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentInformation extends Model
{
    use HasFactory;
    
    protected $table = 'employment_information';

    protected $primaryKey = 'EmploymentID';

    protected $filltable = [
        'EmploymentWmsuID','EmploymentDepartment','EmploymentCollegeTitle', 'EmploymentDate', 'EmploymentPRClicenseID', 
    ];

    protected $timestamp = TRUE;

    public function profile() 
    {
        return $this->hasMany('App\Models\EmploymentInformation');
    }
    
    public function users ()
     {
    
        return $this->belongsToMany('App\Models\User');
       
    }
}
