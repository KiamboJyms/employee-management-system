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
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement()->primary();
            $table->bigInteger('emp_id');
            /** With this we get employee name and emp code  */
            $table->string('leave_type', 200);
            $table->date('apply_date');
            $table->date('start_date');
            $table->date('end_date');
            /** With the above two we can calcurate the duration */
            $table->string('leave_status', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_applications');
    }
};
