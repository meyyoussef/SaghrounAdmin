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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('nic')->unique();
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('phone', 20)->unique();
            $table->string('address');
            $table->string('email')->unique();
            $table->date('dateofbirth');
            $table->text('password');
            $table->string('confirmpassword');
            $table->string('gender');
            $table->string('status');
            $table->string('type_degree');
            $table->string('languages');
            $table->string('filename');
            $table->string('imagename', 300);
            $table->float('salary')->default(900); // Champ de salaire avec valeur par défaut
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
