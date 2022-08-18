<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executives', function (Blueprint $table) {
            $table->id();
            $table->string('exe_id');
            $table->string('code');
            $table->string('joiningDate');
            $table->string('sponsorCode');
            $table->string('name');
            $table->string('sponsorName');
            $table->string('email');
            $table->string('add');
            $table->string('phone');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('dob');
            $table->string('age');
            $table->string('qualitification');
            $table->string('sex');
            $table->string('commision');
            $table->string('pan');
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
        Schema::dropIfExists('executives');
    }
}
