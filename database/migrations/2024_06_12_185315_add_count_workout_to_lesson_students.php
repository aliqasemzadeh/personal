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
        Schema::table('lesson_students', function (Blueprint $table) {
            $table->double('workout_total')->default(0);
            $table->double('workout_right')->default(0);
            $table->double('workout_wrong')->default(0);
            $table->double('workout_point')->default(0);
            $table->double('conferences')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lesson_students', function (Blueprint $table) {

        });
    }
};
