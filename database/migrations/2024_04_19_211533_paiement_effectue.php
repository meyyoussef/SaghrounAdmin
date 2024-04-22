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
        Schema::table('children', function (Blueprint $table) {
             //Par défaut les frais de l'enfants sont consideres impayées
            //Seule l'admin peut modifier le statut de paiement
            $table->boolean('paiement_effectue')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('children', function (Blueprint $table) {
            //
            $table->dropColumn('paiement_effectue');
        });
    }
};
