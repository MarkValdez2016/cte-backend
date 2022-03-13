<?php

namespace App\Http\Controllers;

use App\Models\AnnouncementType;
use Illuminate\Http\Request;

class AnnouncementTypeController extends Controller
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
        //Add AnnouncementType
        try {
            $announcementType = new AnnouncementType;

            $announcementType->announcementTypeName         = $request->announcementTypeName;
            $announcementType->announcementTypeDescription  = $request->announcementTypeDescription;
    
            $announcementType->created_at                   = now();
            $announcementType->updated_at                   = now();
    
            $announcementType->save();
            return back();

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnnouncementType  $announcementType
     * @return \Illuminate\Http\Response
     */
    public function show(AnnouncementType $announcementType)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnnouncementType  $announcementType
     * @return \Illuminate\Http\Response
     */
    public function edit(AnnouncementType $announcementType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnnouncementType  $announcementType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnouncementType $announcementType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnnouncementType  $announcementType
     * @return \Illuminate\Http\Response
     */
    public function click_delete($id )

    {
        DB::delete('delete users where profile = ?', [$id]);
        return redirect('studentview') ->with('success','Data Deleted');
    }
    

}
