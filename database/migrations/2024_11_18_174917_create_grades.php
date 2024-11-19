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
        Schema::create('grades', function (Blueprint $table) {
            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
            $table->id('Grades_Id')->unique();
            $table->string('Material_Name',50);
            $table->double('Dialy_Assignment',3,1)->default(0);
            $table->double('Midterms_Exam',3,1)->default(0);
            $table->double('End_Of_Semester_Exam',3,1)->default(0);
            $table->double('Extracurricular',3,1)->default(0);
            $table->double('Manner',3,1);
            $table->foreignid('Id_Material');
            $table->foreignid('Id_Class');
            $table->foreignid('Extracurricular_Id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
