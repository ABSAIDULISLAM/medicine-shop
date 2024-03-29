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
        Schema::create('bank_setups', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name', 100);
            $table->date('creation_date');
            $table->float('opening_balance',10,2);
            $table->float('deposit_balance',10,2);
            $table->tinyInteger('status');
            $table->tinyInteger('deletion_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_setups');
    }
};
