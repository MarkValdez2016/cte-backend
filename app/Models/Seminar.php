<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;
    
    protected $table = 'seminars';

    protected $primaryKey = 'SeminarID';

    protected $filltable = [
        'seminarTitle','seminarLocation','seminarDate',
        
    ];

    protected $timestamp = TRUE;

         public function seminar() 
    {
            return $this->belongsToMany('App\Models\Seminar');
    }
    
         public function users ()
     {
    
             return $this->hasMany('App\Models\User');
       
    }
}
