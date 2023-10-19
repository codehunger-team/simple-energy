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
        Schema::table('users', function (Blueprint $table) {
            $table->string('father_name')->nullable()->after('email');
            $table->bigInteger('mobile')->nullable()->after('father_name');
            $table->string('dob')->nullable()->after('mobile');
            $table->string('qualification')->nullable()->after('dob');
            $table->string('pan_number')->nullable()->after('qualification');
            $table->string('aadhar_number')->nullable()->after('pan_number');
            $table->string('address')->nullable()->after('aadhar_number');
            $table->string('district')->nullable()->after('address');
            $table->string('state')->nullable()->after('district');
            $table->string('city')->nullable()->after('state');
            $table->string('post_office')->nullable()->after('city');
            $table->string('pincode')->nullable()->after('post_office');
            $table->string('dealer_name')->nullable()->after('pincode');
            $table->string('b_holder_name')->nullable()->after('dealer_name');
            $table->string('b_account_no')->nullable()->after('b_holder_name');
            $table->string('b_ifsc_code')->nullable()->after('b_account_no');
            $table->string('b_bank_name')->nullable()->after('b_ifsc_code');
            $table->string('b_branch_address')->nullable()->after('b_bank_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
