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
        Schema::table('photo_group_statuses', function (Blueprint $table) {
            //
            $table->char('status_type', 1)->after('photo_group_id')->default('9');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('photo_group_statuses', function (Blueprint $table) {
            //
        });
    }
};
