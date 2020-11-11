<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId("org_id")->constrained("organizations");
            $table->foreignId("user_id")->constrained("users");
            $table->foreignId("major_id")->constrained("majors");
            $table->string("title");
            $table->longText("content");
            $table->string("address");
            $table->timestamp("start_time")->useCurrent();
            $table->timestamp("end_time")->useCurrent();
            $table->timestamp("interview_start_time")->useCurrent();
            $table->timestamp("interview_end_time")->useCurrent();
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
        Schema::dropIfExists('recruitment_news');
    }
}
