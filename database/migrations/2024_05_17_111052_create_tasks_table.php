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
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement()->primary();
            // $table->bigInteger('project_id');
            $table->foreignId('project_id')->references('id')->on('projects')->onDelete('cascade');
            /** We get the project title from the task_id */
            $table->string('task_title', 200);
            $table->date("start_date");
            $table->date("end_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
