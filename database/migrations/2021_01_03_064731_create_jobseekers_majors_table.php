<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseekersMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseekers_majors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('js_id');
            $table->foreign("js_id")->references('id')->on("job_seekers");
            $table->unsignedBigInteger('major_id');
            $table->foreign("major_id")->references('id')->on("majors");
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
        Schema::dropIfExists('jobseekers_majors');
    }
}
