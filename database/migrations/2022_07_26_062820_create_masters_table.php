<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->string('exeNo_id')->nullable();
            $table->string('srNo')->nullable();
            $table->string('exeNo')->nullable();
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->string('comm')->nullable();
            //customer Detail
            $table->string('name2')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('dob')->nullable();
            $table->string('add')->nullable();
            $table->string('age')->nullable();
            $table->string('occupation')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();
            //NomineeDetail
            $table->string('nameNom')->nullable();
            $table->string('dobNom')->nullable();
            $table->string('ageNom')->nullable();
            $table->string('app')->nullable();
            $table->string('add2')->nullable();
            //plot
            $table->string('dise')->nullable();
            $table->string('lock')->nullable();
            $table->string('selectLayout')->nullable();
            $table->string('sqrFt')->nullable();
            $table->string('plotNo')->nullable();
            $table->string('khasaraNo')->nullable();
            $table->string('sqrFt2')->nullable();
            $table->string('mouza')->nullable();
            $table->string('phNo')->nullable();
            $table->string('size')->nullable();
            $table->string('otherDetail')->nullable();
            $table->string('saleRate')->nullable();
            $table->string('totalPlotC')->nullable();
            $table->string('ComRate')->nullable();
            $table->string('netPlotCost')->nullable();
            $table->string('noInstall')->nullable();
            $table->string('downPay')->nullable();
            $table->string('instalFrom')->nullable();
            $table->string('installTo')->nullable();
            $table->string('monInstall')->nullable();
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
        Schema::dropIfExists('masters');
    }
}
