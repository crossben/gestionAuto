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

        $table->integer('modele')->unsigned();
            $table->integer ('matricule');
            $table->string('carburant');
            $table->string('assurances');
            $table->string('numassurances');
            $table->string('type');
            $table->string('marque');
            $table->integer('kilometrage');
            $table->integer('nombreplaces');
            $table->integer('puissance');
            ;$table->mediumText('photos')->nullable();


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
