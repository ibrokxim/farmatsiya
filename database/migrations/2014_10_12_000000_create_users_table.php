<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('dignity');
            $table->string('name');
            $table->string('surname');
            $table->string('second_name');
            $table->string('orcid_id');
            $table->string('institute');
            $table->string('kafedra');
            $table->string('address');
            $table->string('city');
            $table->string('postcode');
            $table->string('country');
            $table->string('number');
            $table->string('second_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
