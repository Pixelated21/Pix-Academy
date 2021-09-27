<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id("course_id");
            $table->foreignId("institution_id")->constrained("institutions","institution_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("course_nm");
            $table->text("course_desc");
            $table->date("training_start");
            $table->date("training_end");
            $table->string("award_type");
            $table->integer("price");
            $table->longText("course_img");
            $table->string("training_type");
            $table->string("format");
            $table->string("modality");
            $table->integer("amt_enrolled")->default(0);
            $table->integer("capacity");
            $table->string("status")->default("open");
            $table->integer("views")->default(0);
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
        Schema::dropIfExists('courses');
    }
}
