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
        Schema::create('chamaas', function (Blueprint $table) {
            $table->id();
            $table->string('ChamaaName');
            $table->string('email')->unique('email');
            $table->string('PhoneNumber')->unique('PhoneNumber');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamaas');
    }
};
