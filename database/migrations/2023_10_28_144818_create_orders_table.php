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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->float('amount', 8, 2)->nullable();
            $table->string('color')->nullable();
            $table->string('model_no')->nullable();
            $table->string('order_id')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->bigInteger('qty')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->nullable();
            $table->string('transcation_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
