<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use DB;

class SeminarController extends Controller
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
        //
        try {
            
            $seminar = new Seminar;

            $seminar->seminarTitle               = request('seminarTitle');
            $seminar->seminarLocation            = request('seminarLocation');
            $seminar->seminarDate                = request('seminarDate');

            $seminar->created_at                    = now();
            $seminar->updated_at                    = now();
    
            $seminar->save();
            return 'DONE';
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show(Seminar $seminar)
    {
        $seminardata = Seminar::all();
        return $seminardata;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Seminar $seminar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            
            $seminarTitle               = $request->input('seminarTitle');
            $seminarLocation            = $request->input('seminarLocation');
            $seminarDate                = $request->input('seminarDate');
    
 
             DB::update('UPDATE seminars SET seminarTitle=?, seminarLocation=?, seminarDate=? WHERE SeminarID = ?',
             [$seminarTitle, $seminarLocation, $seminarDate, $id]);
 
             Echo "Done";

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seminar $seminar)
    {
        try {
            DB::delete('DELETE FROM seminars WHERE SeminarID = ?',[$id]);
            echo 'work';
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
