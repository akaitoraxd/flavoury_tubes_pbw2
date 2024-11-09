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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id("id_trans");
            $table->unsignedBigInteger("id_item");
            $table->unsignedBigInteger("id_user");
            $table->integer("item_quantity");
            $table->integer("total_price");
            $table->timestamp("date");
            $table->timestamps();

            $table->foreign('id_item')->references('id_item')->on('items')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
