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
        Schema::create('letter', function (Blueprint $table) {
            $table->id();
            $table->string('day'); // Subject of the letter
            $table->date('date'); // Body content of the letter
            $table->string('no_letter'); // Sender's name or email
            $table->string('document'); // Recipient's name or email
            $table->enum('dispotition_status',['N','Y'])->default('N'); // Status of the letter (e.g., draft, sent, archived)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter');
    }
};
