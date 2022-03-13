<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
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
            $profile = new Profile;

            $profile->profileLname                = request('profileLname');
            $profile->profileFname                = request('profileMname');
            $profile->profileMname                = request('profileFname');
            $profile->profileGender               = request('profileGender');
            $profile->profileBirthdate            = request('profileBirthdate');
            $profile->profilePicture              = request('profilePicture');
            $profile->profileDegree               = request('profileDegree');
            $profile->profileDepartment           = request('profileDepartment');
            $profile->profileDateEmployed         = request('profileDateEmployed');
    
            $profile->created_at                    = now();
            $profile->updated_at                    = now();
    
            $profile->save();
            return 'DONE';
        } catch (\Throwable $th) {
            throw $th;
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo '120';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
            // $profile->profileLname                = $request->input('profileLname');
            // $profile->profileFname                = $request->input('profileMname');
            // $profile->profileMname                = $request->input('profileFname');
            // $profile->profileGender               = $request->input('profileGender');
            // $profile->profileBirthdate            = $request->input('profileBirthdate');
            // $profile->profilePicture              = $request->input('profilePicture');
            // $profile->profileDegree               = $request->input('profileDegree');
            // $profile->profileDepartment           = $request->input('profileDepartment');
            // $profile->profileDateEmployed         = $request->input('profileDateEmployed');

            // DB::update('update student set profileLname=?, profileLname=?, profileMname=?
            // ,profileGender=?, profileBirthDate=?, profilePicture=? profileDegree=?, profileDepartment=?
            // profileDateEmployed=?, where id = ?',[$profileLname,$profileLname,$profileMname,$profileGender, $profileBirthDate, 
            // $profilePicture, $profileDegree, $profileDepartment, $profileDateEmployed, $id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::delete('DELETE FROM profiles WHERE profileID = ?',[$id]);
            echo 'work';
        } catch (\Throwable $th) {
            throw $th;
        }

    }
}
