<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_info', function (Blueprint $table) {
            $table->id("payment_info_id");
            $table->foreignId("student_id")->constrained("students","student_id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("card_nbr")->nullable();
            $table->string("card_holder_nm")->nullable();
            $table->longText("billing_addr")->nullable();
            $table->integer("cvv")->nullable();
            $table->string("exp_month")->nullable();
            $table->string("exp_year")->nullable();
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
        Schema::dropIfExists('payment_info');
    }
}
