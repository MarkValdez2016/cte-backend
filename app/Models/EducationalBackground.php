<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalBackground extends Model
{
    use HasFactory;

    protected $table = 'educational_backgrounds';

    protected $primaryKey = 'EducationalBackgroundID';

    protected $filltable = [
        'EducationalBackgroundDegree',  'EducationalBackgroundLevel', 
        'EducationalBackgroundCourse', 'EducationalBackgroundPeriodFrom', 'EducationalBackgroundPeriodTo',
    ];

    protected $timestamp = TRUE;

    public function profile() 
    {
        return $this->hasMany('App\Models\EducationalBackground');
    }
    
    public function users ()
     {
    
        return $this->belongsToMany('App\Models\User');
       
    }
}
