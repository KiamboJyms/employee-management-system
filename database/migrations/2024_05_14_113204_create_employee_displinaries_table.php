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
        Schema::create('employee_displinaries', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->primary()->autoIncrement();
            // $table->bigInteger('emp_id')->unsigned(); /** employee id */
            $table->foreignId('emp_id')->references('id')->on('employees')->onDelete('cascade');
            $table->text('description');
            $table->string('status', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_displinaries');
    }
};