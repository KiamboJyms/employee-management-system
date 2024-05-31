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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement()->primary();
            $table->string('project_title', 200);
            $table->date("start_date");
            $table->date("estimated_end_date");
            $table->date('actual_end_date')->nullable();
            $table->text('summary');
            $table->text('details');
            $table->string('status', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
