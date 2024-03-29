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
        Schema::create('collection_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id',10);
            $table->text('address');
            $table->string('contact_number',20);
            $table->integer('saving_bank_id',10);
            $table->float('transfer_bank_amount',10,2);
            $table->float('saving_bank_amount',10,2);
            $table->float('transfer_amount',10,2);
            $table->string('cheque_number',20);
            $table->tinyInteger('deletion_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collection_infos');
    }
};
