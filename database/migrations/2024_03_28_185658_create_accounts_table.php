<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('account_head',10);
            $table->integer('sub_head_id',10);
            $table->integer('scnd_head_id',10);
            $table->string('voucher_no',100);
            $table->string('employee_id',100);
            $table->string('purpose',100);
            $table->string('date',10);
            $table->integer('payment_method',10);
            $table->float('amount',10,2);
            $table->float('credit_amount',10,2);
            $table->string('expense_file',100);
            $table->float('cashAmount',10,2);
            $table->tinyInteger('status');
            $table->tinyInteger('bank_id',10);
            $table->string('chequeNum',100);
            $table->string('chuque_app_date',100);
            $table->string('creator',100);
            $table->tinyInteger('account_type',1)->default(0)->comment('Account type 0 for expense and 1 for income');
            $table->tinyInteger('deletion_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
