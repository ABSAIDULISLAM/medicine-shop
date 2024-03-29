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
        Schema::create('bank_withdraws', function (Blueprint $table) {
            $table->id();
            $table->integer('bank_id',10);
            $table->date('date');
            $table->float('withdraw_amount',10,2);
            $table->text('remarks');
            $table->integer('create_by',10);
            $table->tinyInteger('deletion_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_withdraws');
    }
};
