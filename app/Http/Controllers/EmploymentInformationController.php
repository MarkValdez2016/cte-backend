<?php

namespace App\Http\Controllers;

use App\Models\EmploymentInformation;
use Illuminate\Http\Request;
use DB;

class EmploymentInformationController extends Controller
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
            $employmentInformation = new EmploymentInformation;

            $employmentInformation->EmploymentWmsuID                = request('EmploymentWmsuID');
            $employmentInformation->EmploymentDepartment            = request('EmploymentDepartment');
            $employmentInformation->EmploymentCollegeTitle          = request('EmploymentCollegeTitle');
            $employmentInformation->EmploymentDate                  = request ('EmploymentDate');
            $employmentInformation->EmploymentPRClicenseID          = request ('EmploymentPRClicenseID');


            
    
            $employmentInformation->created_at                  = now();
            $employmentInformation->updated_at                  = now();
    
            $employmentInformation->save();
            return 'DONE';
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmploymentInformation  $employmentInformation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employmentsData = EmploymentInformation::find($id);
        return $employmentsData;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmploymentInformation  $employmentInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(EmploymentInformation $employmentInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmploymentInformation  $employmentInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            
            $EmploymentWmsuID                              = $request->input('EmploymentWmsuID');
            $EmploymentDepartment                          = $request->input('EmploymentDepartment');
            $EmploymentCollegeTitle                        = $request->input('EmploymentCollegeTitle');
            $EmploymentDate                                = $request->input('EmploymentDate');
            $EmploymentPRClicenseID                        = $request->input('EmploymentPRClicenseID');
        
            
             DB::update('UPDATE employment_information SET EmploymentWmsuID=?, EmploymentDepartment=?,  EmploymentCollegeTitle=?, EmploymentDate=?, EmploymentPRClicenseID=? WHERE  EmploymentID= ?',
             [$EmploymentWmsuID, $EmploymentDepartment, $EmploymentCollegeTitle, $EmploymentDate, $EmploymentPRClicenseID, $id]);
 
             Echo "Done";

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmploymentInformation  $employmentInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmploymentInformation $employmentInformation)
    {
        //
    }
}
