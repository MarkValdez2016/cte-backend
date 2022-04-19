<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    protected $table = 'petitions';

    protected $primaryKey = 'petitionsID';

    protected $filltable = [
        'petitionDetails','petitionPicture'
    ];

    protected $timestamp = TRUE;

    public function petition() 
    {
        return $this->hasMany('App\Models\Petition');
    }
    
    public function users ()
     {
    
        return $this->belongsToMany('App\Models\User');
       
    }
}
