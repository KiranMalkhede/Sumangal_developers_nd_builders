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
            $table->string('receiptNo')->nullable();
            $table->string('receiptDate')->nullable();
            $table->string('giver')->nullable();
            $table->string('layout')->nullable();
            $table->string('mouza')->nullable();
            $table->string('khasara')->nullable();
            $table->string('plot_no')->nullable();
            $table->string('size')->nullable();
            $table->string('type')->nullable();
            $table->string('ex_details')->nullable();
            $table->string('amount_received')->nullable();
            $table->string('on_ac_of')->nullable();
            $table->string('tokenExpDate')->nullable();
            $table->string('month')->nullable();
            $table->string('mode_of_pay')->nullable();
            $table->string('cheque_no')->nullable();
            $table->string('cheque_date')->nullable();
            $table->string('bank_name')->nullable();

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
