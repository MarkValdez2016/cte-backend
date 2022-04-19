<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_information', function (Blueprint $table) {
            $table->id('EmploymentID');
            $table->string('EmploymentWmsuID');
            $table->string('EmploymentDepartment');
            $table->string('EmploymentCollegeTitle');
            $table->string('EmploymentDate');
            $table->string('EmploymentPRClicenseID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employment_information');
    }
}
