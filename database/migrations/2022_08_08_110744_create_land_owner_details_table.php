<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandOwnerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_owner_details', function (Blueprint $table) {
            $table->id();
            $table->string('ownerName')->nullable();
            $table->string('address')->nullable();
            $table->string('contactDetail')->nullable();
            $table->string('contactDetail2')->nullable();
            $table->string('mouza')->nullable();
            $table->string('khasara')->nullable();
            $table->string('phNo')->nullable();
            $table->string('acres')->nullable();
            $table->string('perAcres')->nullable();
            $table->string('totalCost')->nullable();
            $table->string('payPeriod')->nullable();

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
        Schema::dropIfExists('land_owner_details');
    }
}
