<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('stagiaires', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('phone');
        $table->string('address');
        $table->unsignedBigInteger('wilaya_id'); // Foreign key to wilayas
        $table->foreign('wilaya_id')->references('id')->on('wilayas')->onDelete('cascade');
        $table->enum('type_formation', ['initiale', 'qualifiante', 'continue']);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
