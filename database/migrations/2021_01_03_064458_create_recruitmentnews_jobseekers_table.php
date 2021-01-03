<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentnewsJobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitmentnews_jobseekers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rn_id');
            $table->foreign("rn_id")->references('id')->on("recruitment_news");
            $table->unsignedBigInteger('js_id');
            $table->foreign("js_id")->references('id')->on("job_seekers");
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
        Schema::dropIfExists('recruitmentnews_jobseekers');
    }
}
