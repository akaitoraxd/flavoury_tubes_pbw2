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
        Schema::create('market', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String("name");
            $table->String("type");
            $table->String("description");
            $table->integer("price");
            $table->integer("sold_amount");
            $table->String("image");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market');
    }
};
