<?php

use App\Models\User;
use App\Models\Stage;
use App\Models\Result;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(Stage::class);
            $table->unsignedBigInteger('approved_by');
            $table->unsignedBigInteger('entered_by');
            $table->foreignIdFor(User::class);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samples');
    }
};
