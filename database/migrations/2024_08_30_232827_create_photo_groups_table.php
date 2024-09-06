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
        Schema::create('photo_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->char('group_type', 1);
            $table->string('file_name');
            $table->string('group_name');
            $table->string('photo_count')->nullable();
            $table->string('non_photo_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_groups');
    }
};
