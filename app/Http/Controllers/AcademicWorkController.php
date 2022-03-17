<?php

namespace App\Http\Controllers;

use App\Models\AcademicWork;
use Illuminate\Http\Request;
use DB;

class AcademicWorkController extends Controller
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
            $academicWork = new AcademicWork;

            $academicWork->academicID                = $request->academicID;
            $academicWork->academicTitle             = $request->academicTitle;
            $academicWork->academicDate              = $request->academicDate;
            $academicWork->academiclinkwork          = $request->academiclinkwork;


    
            $academicWork->created_at                   = now();
            $academicWork->updated_at                   = now();
    
            $academicWork->save();
            // return back();
            echo 'Done';

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcademicWork  $academicWork
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academicWorkData = academicWork::find($id);
        return $academicWorkData;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademicWork  $academicWork
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicWork $academicWork)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcademicWork  $academicWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $academicTitle              = $request->input('academicTitle');
            $academicDate               = $request->input('academicDate');
            $academiclinkwork           = $request->input('academiclinkwork');

            DB::update('UPDATE academic_works SET academicTitle =?, academicDate =?, academiclinkwork =? WHERE 
            academicID =?' , [$academicTitle, $academicDate, $academiclinkwork, $id]);



            
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademicWork  $academicWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicWork $academicWork)
    {
        //
    }
}
