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
        Schema::create('sorteio', function (Blueprint $table) {
            $table->uuid(column:"id")->primary();
            $table->foreignId(column:"user_id")->constrained();
            $table->integer(column:"number_of_winners")->default(value:1);
            $table->timestamp(column:"end_date")->nullable();
            $table->text(column:"description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sorteio');
    }
};
