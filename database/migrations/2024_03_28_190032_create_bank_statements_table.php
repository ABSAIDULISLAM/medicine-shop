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
        Schema::create('bank_statements', function (Blueprint $table) {
            $table->id();
            $table->string('date',20);
            $table->integer('bank_id',10);
            $table->string('cheque_no', 50);
            $table->string('app_date', 20);
            $table->float('debit',10,2);
            $table->float('credit',10,2);
            $table->float('balance',10,2);
            $table->text('remarks');
            $table->tinyInteger('insert_status')->comment('1 for memo , 2 for collection , 3 for expense,8 for personal loan');
            $table->integer('insert_id',10);
            $table->tinyInteger('deletion_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_statements');
    }
};
