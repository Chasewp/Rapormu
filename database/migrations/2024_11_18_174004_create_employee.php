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
        Schema::create('employee', function (Blueprint $table) {
            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
            $table->id();
            $table->integer('Id_Employee')->unique();
            $table->string('Name',60);
            $table->char('Gender_Employee');
            $table->string('Role',20);
            $table->string('Degrees',3);
            $table->string('Username',15)->unique();
            $table->timestamp('Username_Verified_At')->nullable();
            $table->string('Password',15)->unique();
            $table->integer('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
