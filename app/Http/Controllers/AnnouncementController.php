<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

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

            $announcement->announcementTypeID       = $request->announcementTypeID;
            $announcement->announcementTitle        = $request->announcementTitle;
            $announcement->announcementDetails      = $request->announcementDetails;
            $announcement->announcementImage        = $request->announcementImage;
            $announcement->announcementMemo         = $request->announcementMemo;
            $announcement->announcementDescription  = $request->announcementDescription;

    
            $announcement->created_at                   = now();
            $announcement->updated_at                   = now();
    
            $announcement->save();
            // return back();
            echo 'Done';

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
    public function show(Announcement $announcement)
    {
        //
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
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function delete( $id)
    {
        // $announcement->delete();

        // return redirect()->route('posts.index')
        //      ->withSuccess(__('Post delete successfully.'));
    }
}
