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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id("id_recipe");
            $table->unsignedBigInteger("id_user");
            $table->String("name_recipe", 100);
            $table->text("descrip_recipe");
            $table->text("ingredient");
            $table->text("location");
            $table->text("flow_cooking");
            $table->double("rating", 20)->default(0);
            $table->timestamps();
            $table->string("image",100);

            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
