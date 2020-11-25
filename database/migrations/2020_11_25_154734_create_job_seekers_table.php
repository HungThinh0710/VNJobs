<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rn_id');
            $table->foreign("rn_id")->references('id')->on("recruitment_news");
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references('id')->on("users");
            $table->tinyInteger("is_elect");
            $table->string("cv_path")->nullable();
            $table->string("cover_letter_path")->nullable();
            $table->integer("exp_years");
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
        Schema::dropIfExists('job_seekers');
    }
}
