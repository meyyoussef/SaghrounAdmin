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
        Schema::table('chefs', function (Blueprint $table) {
            if (!Schema::hasColumn('chefs', 'confirmpassword')) {
                $table->string('confirmpassword')->nullable();
            }
    
            if (!Schema::hasColumn('chefs', 'gender')) {
                $table->string('gender')->nullable();
            }
    
            if (!Schema::hasColumn('chefs', 'status')) {
                $table->string('status')->nullable();
            }
    
            if (!Schema::hasColumn('chefs', 'type_degree')) {
                $table->string('type_degree')->nullable();
            }
    
            if (!Schema::hasColumn('chefs', 'languages')) {
                $table->string('languages')->nullable();
            }
    
            if (!Schema::hasColumn('chefs', 'filename')) {
                $table->string('filename')->nullable();
            }
    
            if (!Schema::hasColumn('chefs', 'imagename')) {
                $table->string('imagename', 300)->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chefs', function (Blueprint $table) {
            //
        });
    }
};
