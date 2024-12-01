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
        Schema::create('comments', function (Blueprint $table) {
            $table->id("id_comment");
            $table->unsignedBigInteger("id_recipe"); 
            $table->unsignedBigInteger("id_user"); 
            $table->text("comment");
            $table->integer("rating")->default(0);    // Rating
            $table->timestamp("date")->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
