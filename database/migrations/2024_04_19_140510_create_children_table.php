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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username');
       
            $table->integer('phone');

            $table->string('password');
            $table->string('password_confirmation');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->date('dateofbirth');
            $table->string('activities');
            $table->string('filename');
            $table->string('gender');
           //le frais par défaut c'est 280dt 
            $table->decimal('frais', 8, 2)->default(280.00);
            $table->string('allergies')->nullable();
            $table->string('conditions')->nullable();
            $table->string('message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
