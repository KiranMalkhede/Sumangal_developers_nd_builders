<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('receiptNo');
            $table->string('receiptDate');
            $table->string('giver');
            $table->string('layout');
            $table->string('mouza');
            $table->string('khasara');
            $table->string('plot_no');
            $table->string('size');
            $table->string('type');
            $table->string('ex_details');
            $table->string('amount_received');
            $table->string('on_ac_of');
            $table->string('tokenExpDate');
            $table->string('month');
            $table->string('mode_of_pay');
            $table->string('cheque_no');
            $table->string('cheque_date');
            $table->string('bank_name');

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
        Schema::dropIfExists('receipts');
    }
}
