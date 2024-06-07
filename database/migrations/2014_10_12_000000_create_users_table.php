<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Enums\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('role')->default(Role::Customer); // Set the default role to Admin
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        // Insert default admin user
        User::create([
            'role' => Role::Admin,
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('Admin123'), // You should use Hash facade instead of bcrypt() in Laravel 8+
        ]);

        // Insert default guest user
        User::create([
            'role' => Role::Guest,
            'name' => 'Guest User',
            'email' => 'guest@guest.com',
            'password' => bcrypt('Guest123'), // You should use Hash facade instead of bcrypt() in Laravel 8+
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
