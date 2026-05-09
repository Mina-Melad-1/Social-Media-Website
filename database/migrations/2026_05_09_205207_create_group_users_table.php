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
        Schema::create('group_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('created_by')->constrained('users');
            $table->string('token', 1024)->nullable();// for invitation token
            $table->timestamp('token_expire_at')->nullable();// for invitation token expiration
            $table->timestamp('token_used')->nullable(); // for status when user is invited but not yet accepted
            $table->string('role', 25); // admin, user
            $table->string('status', 25);// pending, approved
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_users');
    }
};
