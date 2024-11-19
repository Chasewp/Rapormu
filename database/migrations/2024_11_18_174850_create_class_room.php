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
        Schema::create('class_room', function (Blueprint $table) {
            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
            $table->id('Id_Class')->unique();
            $table->string('Class');
            $table->string('Focus',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_room');
    }
};
