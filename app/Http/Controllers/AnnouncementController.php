<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use DB;

class AnnouncementController extends Controller
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
        //Add Announcement
        try {
            $announcement = new Announcement;

            $announcement->announcementType         = $request->announcementType;
            $announcement->announcementDetails      = $request->announcementDetails;
            $announcement->announcementImage        = $request->announcementImage;
      
            $announcement->created_at                   = now();
            $announcement->updated_at                   = now();
    
            $announcement->save();
            echo 'Done'; /* ALERT SA JS */

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $data = Announcement::all();
        return $data;           

        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        try {

            $announcementDetails         = $request->input('announcementDetails');
            $announcementImage           = $request->input('announcementImage');
        
            DB::update('UPDATE announcements SET announcementDetails =?, announcementImage =? WHERE announcementID =?',
            [$announcementDetails,$announcementImage,$id]);
            echo 'Done';

        } catch (\Throwable $th) {

            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::delete('DELETE FROM announcements WHERE announcementID = ?',[$id]);
            echo 'work';
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
