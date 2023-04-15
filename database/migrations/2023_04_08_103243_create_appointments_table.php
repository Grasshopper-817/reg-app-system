<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('app_purpose');
            $table->string('acad_year');
            $table->string('appointment_date');
            $table->string('user_year_grad')->nullable();
            $table->string('user_acad_year')->nullable();
            $table->string('booking_number')->unique()->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('form_id');
            $table->foreign('form_id')->references('id')->on('forms');

            // $table->string('payment')->nullable();
            // $table->string('pay_image')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
