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
        Schema::create('checkatts', function (Blueprint $table) {
            $table->id();
            $table->string('check_name');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('status_id');

            $table->foreign('status_id')
                ->references('id')
                ->on('check_statuses')
                ->onDelete('cascade');

            $table->unsignedBigInteger('student_id');

            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade');

            $table->unsignedBigInteger('course_id');

            $table->foreign('course_id')
            ->references('course_id')
            ->on('courses')
            ->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkatts');
    }
};
