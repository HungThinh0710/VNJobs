<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("rn_id")->constrained("recruitment_news");
            $table->foreignId("user_id")->constrained("users");
            $table->tinyInteger("is_elect");
            $table->string("cv_path");
            $table->string("cover_letter_path");
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
        Schema::dropIfExists('interviewers');
    }
}
