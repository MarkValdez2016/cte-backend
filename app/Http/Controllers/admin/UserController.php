<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
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
        //Insert USER ACC

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Insert Profile 
        // $profile = new Profile;

        // $profile->user_id                     = $user->id;
        // $profile->profileLname                = request('profileLname');
        // $profile->profileFname                = request('profileMname');
        // $profile->profileMname                = request('profileFname');
        // $profile->profileAddress              = request('profileAddress');
        // $profile->profileGender               = request('profileGender');
        // $profile->profileBirthdate            = request('profileBirthdate');
        // $profile->profilePicture              = request('profilePicture');
        // $profile->profileDegree               = request('profileDegree');
        // $profile->profileDepartment           = request('profileDepartment');
        // $profile->profileDateEmployed         = request('profileDateEmployed');

        // $profile->create_at                   = now();
        // $profile->updated_at                  = now();

        // $profile->save();

        // $profile = Profile:: select('profiles')->where('profileID', $profile->profileID)->first();
        // $user->profile()->attach($prof);

        // return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
