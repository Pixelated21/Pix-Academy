<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media_info', function (Blueprint $table) {
            $table->id("social_media_id");
            $table->foreignId("student_id")->constrained("students","student_id")->cascadeOnUpdate()->cascadeOnDelete();
            $table->string("social_platform");
            $table->string("social_handle");
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
        Schema::dropIfExists('social_media_info');
    }
}
