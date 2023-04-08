<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('middleName');
            $table->string('suffix');
            $table->string('address');
            $table->string('school_id');
            $table->string('cell_no');
            $table->string('civil_status')->nullable();
            $table->string('email')->unique();
            $table->date('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('course')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
class User extends Authenticatable
{

}
