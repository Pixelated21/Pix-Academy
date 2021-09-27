<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_applications', function (Blueprint $table) {
            $table->id("course_applicants_id");
            $table->foreignId("course_id")->constrained("courses","course_id")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("student_id")->constrained("students","student_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("payment_status")->default('Not Paid');
            $table->string("status")->default('Pending');
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
        Schema::dropIfExists('course_applications');
    }
}
