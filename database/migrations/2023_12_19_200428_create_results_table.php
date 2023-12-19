<?php

use App\Models\Lab;
use App\Models\Sample;
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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('parameters')->nullable();
            $table->string('result')->nullable();
            $table->string('test_level')->nullable();
            $table->foreignIdFor(Sample::class);
            $table->foreignIdFor(Lab::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
