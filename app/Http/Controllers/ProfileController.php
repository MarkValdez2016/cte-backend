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
            $profile->profileAddress              = request('profileAddress');
            $profile->profileBirthDate            = request('profileBirthDate');
            $profile->profilePicture              = request('profilePicture');
            $profile->profileReligion             = request('profileReligion');
            $profile->profileCivilStatus          = request('profileCivilStatus');
            $profile->profileZipCode              = request('profileZipCode');

            
    
            $profile->created_at                  = now();
            $profile->updated_at                  = now();
    
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
        $profilesData = Profile::all($id);
        return $profilesData; 

        // $profileData = Profile::all();
        //     return $profileData;
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
    public function update(Request $request, $id)
    {   
        try {
            
            $profileLname                        = $request->input('profileLname');
            $profileFname                        = $request->input('profileMname');
            $profileMname                        = $request->input('profileFname');
            $profileGender                       = $request->input('profileGender');
            $profileAddress                      = $request->input('profileAddress');
            $profileBirthDate                    = $request->input('profileBirthDate');
            $profilePicture                      = $request->input('profilePicture');
            $profileReligion                     = $request->input('profileReligion');
            $profileCivilStatus                  = $request->input('profileCivilStatus');
            $profileZipCode                      = $request->input('profileZipCode');
            
             DB::update('UPDATE profiles SET profileLname=?, profileFname=?, profileMname=?,  profileGender=?, profileAddress=?, profileBirthDate=?, profilePicture=?, profileReligion=?, profileCivilStatus=?, profileZipCode=? WHERE profileID = ?',
             [$profileLname, $profileFname, $profileMname, $profileGender, $profileAddress, $profileBirthDate, $profilePicture, $profileReligion, $profileCivilStatus, $profileZipCode, $id]);
 
             Echo "Done";

        } catch (\Throwable $th) {
            throw $th;
        }
          

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

    //view Record 
}
