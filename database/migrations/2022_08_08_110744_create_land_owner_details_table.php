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
            $table->string('ownerName');
            $table->string('address');
            $table->string('contactDetail');
            $table->string('contactDetail2');
            $table->string('mouza');
            $table->string('khasara');
            $table->string('phNo');
            $table->string('acres');
            $table->string('perAcres');
            $table->string('totalCost');
            $table->string('payPeriod');

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
