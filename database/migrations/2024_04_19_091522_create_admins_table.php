<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable(); // Ajout de la colonne "role"
            $table->rememberToken();
            $table->timestamps();
        });

        // Insertion de l'administrateur par défaut
        DB::table('admins')->insert([
            'firstname' => 'Administrateur',
            'email' => 'meyyoussef@gmail.com',
            'password' => Hash::make('SaghrounAdmin1'), // Assurez-vous de hasher le mot de passe
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'Admin', // Attribution du rôle "Admin" à l'administrateur
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
