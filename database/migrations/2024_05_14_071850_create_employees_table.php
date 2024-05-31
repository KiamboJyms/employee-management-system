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
        Schema::create('employees', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->unsigned()->primary();
            // $table->bigInteger('org_id');
            // $table->foreignId('org_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->string('firstname', 200);
            $table->string('lastname', 200);
            $table->string('emp_code', 200);  /** Employee code generated by the server */
            $table->string('departmanet', 300);
            $table->string('designation', 200);
            $table->string('role', 200);
            $table->string('gender', 100);
            $table->string('blood_group', 50);
            $table->string('national_id', 100);
            $table->date('date_of_birth');
            $table->date('date_of_joining');
            $table->date('date_of_leaving')->nullable();
            $table->string('username', 200);
            $table->string('email', 200);
            $table->string('image', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};