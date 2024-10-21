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
        Schema::table('stagiaires', function (Blueprint $table) {
            // Add missing columns from the new schema
            $table->string('prenom');
            $table->string('commune');
            $table->enum('sexe', ['HOMME', 'FEMME']);
            $table->date('date_naissance');
            $table->string('prenom_pere')->nullable();
            $table->string('prenom_mere')->nullable();
            $table->string('nom_mere')->nullable();
            $table->unsignedBigInteger('formation_id');  // Add foreign key for formation
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::table('stagiaires', function (Blueprint $table) {
            // Remove the columns we added in the 'up' method
            $table->dropColumn([
                'prenom', 
                'commune', 
                'sexe', 
                'date_naissance', 
                'prenom_pere', 
                'prenom_mere', 
                'nom_mere', 
                'formation_id'
            ]);
        });
    }
    
};
