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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->date('date')->now();
            $table->foreignId('customer_id')->unique()->constrained(
                table: 'users', 
                indexName: 'bill_customer_id'
            );
            $table->string('snap_token')->nullable();
            $table->unsignedBigInteger('price');
            $table->decimal('usage', 10, 2);
            $table->enum('status', ['pending', 'paid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
