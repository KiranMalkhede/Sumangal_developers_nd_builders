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
            $table->string('exe_id')->nullable();
            $table->string('code')->nullable();
            $table->string('joiningDate')->nullable();
            $table->string('sponsorCode')->nullable();
            $table->string('name')->nullable();
            $table->string('sponsorName')->nullable();
            $table->string('email')->nullable();
            $table->string('add')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('qualitification')->nullable();
            $table->string('sex')->nullable();
            $table->string('commision')->nullable();
            $table->string('pan')->nullable();
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
