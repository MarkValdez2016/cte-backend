<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementType extends Model
{
    use HasFactory;

    protected $table = 'announcement_types';

    protected $primaryKey = 'announcementTypeID';

    protected $filltable = [
        'announcementTypeName','announcementTypeDescription',
    ];

    protected $timestamp = TRUE;

    public function AnnouncementType() 
    {
        return $this->hasMany('App\Models\AnnouncementType');
    }
    

}
