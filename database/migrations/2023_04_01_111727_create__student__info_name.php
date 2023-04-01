<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInfoName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Student_Info', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('schoolId');
            $table->string('middleName');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthdate');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->integer('cellphoneNo');
            $table->string('address');
            $table->enum('status',['undergraduate','graduate','secondary']);
            $table->enum('courseID',['BSCS','DIT','BSHM','BEED']);
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
        Schema::dropIfExists('Student_Info');
    }
}
