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
        Schema::create('cash_statements', function (Blueprint $table) {
            $table->id();
            $table->string('date',20);
            $table->text('remarks');
            $table->float('debit',10,2);
            $table->float('credit',10,2);
            $table->tinyInteger('insert_status')->comment('1 for sales, 2 collection , 3 for expense ,4 for purchases, 5 for deposit');
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
        Schema::dropIfExists('cash_statements');
    }
};
