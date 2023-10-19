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
        Schema::table('pre_bookings', function (Blueprint $table) {
            $table->string('name')->nullable()->after('product_id');
            $table->bigInteger('phone_no')->nullable()->after('name');
            $table->string('email_id')->nullable()->after('phone_no');
            $table->string('location')->nullable()->after('email_id');
            $table->string('vehicle_name')->nullable()->after('location');
            $table->string('vehicle_color')->nullable()->after('vehicle_name');
            $table->string('transaction_id')->nullable()->after('vehicle_color');
            $table->string('amount_paid')->nullable()->after('transaction_id');
            $table->text('transaction_photo')->nullable()->after('amount_paid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_columns_pre_bookings');
    }
};
