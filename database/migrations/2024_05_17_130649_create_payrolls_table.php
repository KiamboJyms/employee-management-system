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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement()->primary();
            $table->bigInteger('emp_id');
            $table->string('month_of_payment', 100);
            $table->string('year_of_payment', 100);
            $table->decimal('salary', total: 10, places: 2);
            $table->decimal('loan', total: 10, places: 2);
            $table->string('hours', 50);
            $table->decimal('deductions', total: 10, places: 2);
            $table->decimal('total_paid', total: 10, places: 2);
            $table->date('pay_date');
            $table->string('status', 100);
            /**
             * With different data we are going to generate payslip
             * and a payslip report.
             */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
