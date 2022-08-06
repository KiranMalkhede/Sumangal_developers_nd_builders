<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layouts', function (Blueprint $table) {
            $table->id();
            $table->string('layout_id');
            $table->string('code');
            $table->string('project');
            $table->string('mouza');
            $table->string('khasara');
            $table->string('phNo');
            $table->string('tah');
            $table->string('land');
            $table->string('share');
            $table->string('surplusLand');
            $table->string('govtShare');
            $table->string('openSpace');
            $table->string('uitility');
            $table->string('plot');
            $table->string('road');
            $table->string('commPlot');
            $table->string('downPay');
            $table->string('installPer');
            $table->string('samiComm');
            $table->string('downPay2');
            $table->string('installPer2');
            $table->string('otherPlot');
            $table->string('downPay3');
            $table->string('installPer3');
            $table->string('sqrFt');
            $table->string('finance');
            // $table->string('installPer3');
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
        Schema::dropIfExists('layouts');
    }
}
