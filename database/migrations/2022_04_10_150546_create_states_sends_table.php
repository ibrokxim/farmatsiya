<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states_sends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('status')->default('Проверяется');
            $table->string('stat_lang');
            $table->string('short_name');
            $table->string('stat_type');
            $table->string('category');
            $table->string('institute_uz');
            $table->string('institute_ru');
            $table->string('institute_en');
            $table->string('annotation');
            $table->string('key_words');
            $table->string('files');
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
        Schema::dropIfExists('states_sends');
    }
}
