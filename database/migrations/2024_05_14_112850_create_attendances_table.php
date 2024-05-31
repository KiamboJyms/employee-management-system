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
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->primary()->autoIncrement();
            $table->string('employee', 500);
            $table->date('date')->nullable();
            $table->time('sign_in_time', precision: 0)->nullable();
            $table->time('sign_out_time', precision: 0)->nullable();
            $table->string('place', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
