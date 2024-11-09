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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('AmountBorrowed');
            $table->dateTime('DateIssued');
            $table->dateTime('DueDate');
            $table->timestamp('ClearanceDate');
            $table->integer('InterestRate');
            $table->integer('LoanTerm');
            $table->enum('Status', ['Pending', 'Approved', 'Declined', 'Cleared']);
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};