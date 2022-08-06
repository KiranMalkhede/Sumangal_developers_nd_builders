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
            $table->string('exeNo_id');
            $table->string('srNo');
            $table->string('exeNo');
            $table->string('name');
            $table->string('date');
            $table->string('comm');
            //customer Detail
            $table->string('name2');
            $table->string('customer_id');
            $table->string('dob');
            $table->string('add');
            $table->string('age');
            $table->string('occupation');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('phone3');
            //NomineeDetail
            $table->string('nameNom');
            $table->string('dobNom');
            $table->string('ageNom');
            $table->string('app');
            $table->string('add2');
            //plot
            $table->string('dise');
            $table->string('lock');
            $table->string('selectLayout');
            $table->string('sqrFt');
            $table->string('plotNo');
            $table->string('khasaraNo');
            $table->string('sqrFt2');
            $table->string('mouza');
            $table->string('phNo');
            $table->string('size');
            $table->string('otherDetail');
            $table->string('saleRate');
            $table->string('totalPlotC');
            $table->string('ComRate');
            $table->string('netPlotCost');
            $table->string('noInstall');
            $table->string('downPay');
            $table->string('instalFrom');
            $table->string('installTo');
            $table->string('monInstall');
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
