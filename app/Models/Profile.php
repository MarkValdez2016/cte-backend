<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    use HasFactory;

    protected $table = 'profiles';

    protected $primaryKey = 'ProfileID';

    protected $filltable = [
        'profileLname','profileFname','profileMname','profileGender','profileBirthDate',
        'profilePicture', 'profileDegree',  'profileDepartment', 'profileDateEmployed',
    ];

    protected $timestamp = TRUE;

    public function profile() 
    {
        return $this->hasMany('App\Models\Profile');
    }
    
    public function users ()
     {
    
        return $this->belongsToMany('App\Models\User');
       
    }
}