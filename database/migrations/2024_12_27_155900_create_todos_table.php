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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('task')->default("task");
            $table->string('description')->nullable();
            $table->enum('status', ['pending','progress', 'done', 'skip'])->default('pending');
            $table->integer('priority')->default(1);
            $table->date('due_date')->nullable();
            $table->timestamps();
            $table->string('tags')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
