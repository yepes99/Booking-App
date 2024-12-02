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
            // Nuevos campos a agregar
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->enum('role', ['user', 'admin', 'hotel_owner'])->default('user');
            $table->string('profile_picture')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->date('birth_date')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->boolean('is_active')->default(true);
            $table->json('preferences')->nullable();
            
            // Otros campos adicionales
            $table->timestamp('phone_verified_at')->nullable();
            $table->boolean('is_subscribed_to_newsletter')->default(false);
            $table->timestamp('last_purchase_at')->nullable();
            $table->string('preferred_language', 2)->default('en');
            $table->string('country', 100)->nullable();
            $table->string('referral_code')->nullable();
            $table->decimal('total_spent', 10, 2)->default(0);
            $table->unsignedInteger('reservations_count')->default(0); // Número de reservas
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Borramos los campos añadidos
            $table->dropColumn([
                'last_name',
                'phone',
                'address',
                'role',
                'profile_picture',
                'is_verified',
                'birth_date',
                'last_login_at',
                'is_active',
                'preferences',
                'phone_verified_at',
                'is_subscribed_to_newsletter',
                'last_purchase_at',
                'preferred_language',
                'country',
                'referral_code',
                'total_spent',
                'reservations_count' 
            ]);
        });
    }
};
