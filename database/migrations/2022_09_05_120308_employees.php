<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');

            $table->string('last_name');

            $table->string('gender');

            $table->string('email')->unique();

            $table->string('phone_number');

            $table->string('date_of_birth');

            $table->string('address');

        });
    }

 
    public function down()
    {
        Schema::drop('employees');
    }
}
