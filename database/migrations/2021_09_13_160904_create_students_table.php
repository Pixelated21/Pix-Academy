<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id("student_id")->unsigned();
            $table->string("first_nm");
            $table->string("middle_nm")->nullable();
            $table->string("last_nm");
            $table->string("salutation_val")->nullable();
            $table->foreignId("user_id")->nullable()->constrained("users","user_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("media_id")->nullable()->constrained("media","media_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("gender");
            $table->string("dob");
            $table->string("trn_nbr")->nullable();
            $table->string("tele_nbr")->nullable();
            $table->string("country_nm")->nullable();
            $table->string("addr_ln_1")->nullable();
            $table->string("city_nm")->nullable();
            $table->string("parish_nm")->nullable();
            $table->string("postal_zone")->nullable();
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
        Schema::dropIfExists('students');
    }
}
