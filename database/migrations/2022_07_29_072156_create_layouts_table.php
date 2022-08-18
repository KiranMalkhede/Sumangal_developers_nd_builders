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
            $table->string('layout_id')->nullable();
            $table->string('code')->nullable();
            $table->string('project')->nullable();
            $table->string('mouza')->nullable();
            $table->string('khasara')->nullable();
            $table->string('phNo')->nullable();
            $table->string('tah')->nullable();
            $table->string('land')->nullable();
            $table->string('share')->nullable();
            $table->string('surplusLand')->nullable();
            $table->string('govtShare')->nullable();
            $table->string('openSpace')->nullable();
            $table->string('uitility')->nullable();
            $table->string('plot')->nullable();
            $table->string('road')->nullable();
            $table->string('commPlot')->nullable();
            $table->string('downPay')->nullable();
            $table->string('installPer')->nullable();
            $table->string('samiComm')->nullable();
            $table->string('downPay2')->nullable();
            $table->string('installPer2')->nullable();
            $table->string('otherPlot')->nullable();
            $table->string('downPay3')->nullable();
            $table->string('installPer3')->nullable();
            $table->string('sqrFt')->nullable();
            $table->string('finance')->nullable();
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
