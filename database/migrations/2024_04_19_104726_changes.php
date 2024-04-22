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
        Schema::table('teachers', function (Blueprint $table) {
            // Ajoutez seulement les colonnes qui n'existent pas déjà
            if (!Schema::hasColumn('teachers', 'confirmpassword')) {
                $table->string('confirmpassword')->nullable();
            }
    
            if (!Schema::hasColumn('teachers', 'gender')) {
                $table->string('gender')->nullable();
            }
    
            if (!Schema::hasColumn('teachers', 'status')) {
                $table->string('status')->nullable();
            }
    
            if (!Schema::hasColumn('teachers', 'type_degree')) {
                $table->string('type_degree')->nullable();
            }
    
            if (!Schema::hasColumn('teachers', 'languages')) {
                $table->string('languages')->nullable();
            }
    
            if (!Schema::hasColumn('teachers', 'filename')) {
                $table->string('filename')->nullable();
            }
    
            if (!Schema::hasColumn('teachers', 'imagename')) {
                $table->string('imagename', 300)->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('confirmpassword')->nullable(false)->change();
            $table->string('gender')->nullable(false)->change();
            $table->string('type_degree')->nullable(false)->change();
            $table->string('languages')->nullable(false)->change();
            $table->string('filename')->nullable(false)->change();
            $table->string('imagename', 300)->nullable(false)->change();
        });
    }
};
