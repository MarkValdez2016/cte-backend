<?php

namespace App\Http\Controllers;

use App\Models\EducationalBackground;
use Illuminate\Http\Request;
use DB;

class EducationalBackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try {
            $EducationalBackground = new EducationalBackground;

            $EducationalBackground->EducationalBackgroundDegree               = request('EducationalBackgroundDegree');
            $EducationalBackground->EducationalBackgroundLevel                = request('EducationalBackgroundLevel');
            $EducationalBackground->EducationalBackgroundCourse               = request('EducationalBackgroundCourse');
            $EducationalBackground->EducationalBackgroundPeriodFrom           = request('EducationalBackgroundPeriodFrom');
            $EducationalBackground->EducationalBackgroundPeriodTo             = request('EducationalBackgroundPeriodTo');

            
    
            $EducationalBackground->created_at                  = now();
            $EducationalBackground->updated_at                  = now();
    
            $EducationalBackground->save();
            return 'DONE';
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationalBackground  $educationalBackground
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $educationalBackgroundData = EducationalBackground::find($id);
        return $educationalBackgroundData;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationalBackground  $educationalBackground
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationalBackground $educationalBackground)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationalBackground  $educationalBackground
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            
            $EducationalBackgroundDegree                       = $request->input('EducationalBackgroundDegree');
            $EducationalBackgroundLevel                        = $request->input('EducationalBackgroundLevel');
            $EducationalBackgroundCourse                       = $request->input('EducationalBackgroundCourse');
            $EducationalBackgroundPeriodFrom                   = $request->input('EducationalBackgroundPeriodFrom');
            $EducationalBackgroundPeriodTo                     = $request->input ('EducationalBackgroundPeriodTo');
            
            
             DB::update('UPDATE educational_backgrounds SET EducationalBackgroundDegree=?, EducationalBackgroundLevel=?, EducationalBackgroundCourse=?, EducationalBackgroundPeriodFrom=?, EducationalBackgroundPeriodTo=? WHERE EducationalBackgroundID = ?',
             [ $EducationalBackgroundDegree, $EducationalBackgroundLevel, $EducationalBackgroundCourse, $EducationalBackgroundPeriodFrom,  $EducationalBackgroundPeriodTo, $id]);
 
             Echo "Done";

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationalBackground  $educationalBackground
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationalBackground $educationalBackground)
    {
        try {
            DB::delete('DELETE FROM educational_backgrounds WHERE EducationalBackgroundID = ?',[$id]);
            echo 'work';
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
