<?php

namespace App\Http\Controllers;

use App\Models\Analytics;
use Illuminate\Http\Request;
use DB;

class AnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            try {
                
                $degree1 = DB::table('educational_backgrounds')
                            ->where('EducationalBackgroundDegree', 'Bachelor Degree')
                            ->count();
    
               $degree2  = DB::table('educational_backgrounds')
                            ->where('EducationalBackgroundDegree', 'Master Degree')
                            ->count();
    
               $degree3  = DB::table('educational_backgrounds')
                            ->where('EducationalBackgroundDegree', 'Doctorate Degree')
                            ->count();
    
                            
               $department1 = DB::table('employment_information')
                            ->where('EmploymentDepartment', 'Elementary Education')
                            ->count();
    
               $department2 = DB::table('employment_information')
                            ->where('EmploymentDepartment', 'Secondary Education')
                            ->count();
    
               $department3 = DB::table('employment_information')
                            ->where('EmploymentDepartment', 'Special Education')
                            ->count();
    
                echo $degree1 . ','. $degree2 .','. $degree3 .','. $department1 .','. $department2.','. $department3;
    
            } catch (\Throwable $th) {
                throw $th;
                // echo 'error';

                
               
            }
               
    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analytics  $analytics
     * @return \Illuminate\Http\Response
     */
    public function show(Analytics $analytics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analytics  $analytics
     * @return \Illuminate\Http\Response
     */
    public function edit(Analytics $analytics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analytics  $analytics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analytics $analytics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analytics  $analytics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analytics $analytics)
    {
        //
    }
}
