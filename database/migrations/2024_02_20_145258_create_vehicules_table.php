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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('couleur');
            $table->string('matricule');
            $table->string('modele');
            $table->string('carburant');
            $table->string('type');
            $table->string('assurances');
            $table->string('numassurances');
            $table->date('debutassurance');
            $table->date('finassurance');
            $table->integer('nombreplaces');
            $table->integer('kilometrage');
            $table->integer('puissance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
