<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('about');
            $table->string('content');
            $table->string('status');
            $table->timestamp('createdAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};