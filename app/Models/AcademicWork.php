<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicWork extends Model
{
    use HasFactory;

    protected $table = 'academic_works';

    protected $primaryKey = 'academicID';

    protected $filltable = [
        'academicTitle','academicDate','academiclinkwork',
    ];

    protected $timestamp = TRUE;

    public function AcademicWork() 
    {
        return $this->hasMany('App\Models\AcademicWork');
    }
}
