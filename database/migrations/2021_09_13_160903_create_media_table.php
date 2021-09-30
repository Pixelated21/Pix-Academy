<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id("media_id");
            $table->foreignId("student_id")->constrained("students","student_id")->cascadeOnUpdate()->cascadeOnDelete();
            $table->string("profile_pic");
            $table->string("cover_pic");
            $table->string("passport_pic")->nullable();
            $table->string("qualification_pic")->nullable();
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
        Schema::dropIfExists('media');
    }
}
