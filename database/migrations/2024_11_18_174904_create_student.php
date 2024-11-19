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
        Schema::create('student', function (Blueprint $table) {
            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
            $table->id('NIS')->unique();
            $table->string('Name');
            $table->char('Gender_Student');
            $table->string('Class_Room',10);
            $table->string('Focus',50);
            $table->integer('Grades');
            $table->foreignid('Grades_Id');
            $table->foreignid('Id_Class');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
