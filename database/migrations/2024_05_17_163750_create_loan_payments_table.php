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
        Schema::create('loan_payments', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement()->primary();
            // $table->bigInteger('loan_id');
            $table->foreignId('loan_id')->references('id')->on('loans')->onDelete('cascade');
            $table->decimal('loan_installment', total: 10, places: 2);
            $table->date('date_received');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_payments');
    }
};
