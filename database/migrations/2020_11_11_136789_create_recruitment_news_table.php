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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('org_id');
            $table->foreign("org_id")->references('id')->on("organizations");
            $table->unsignedBigInteger('author_id');
            $table->foreign("author_id")->references('id')->on("users");
            $table->unsignedBigInteger('major_id');
            $table->foreign("major_id")->references('id')->on("majors");
            $table->string("title");
            $table->longText("content");
            $table->string("address");
            $table->string("city");
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
