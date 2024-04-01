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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->integer('codebarre');
            $table->string('designation');
            $table->double('prix_ht');
            $table->double('tva');
            $table->text('description');
            $table->string('image');
            $table->foreignId('sous_famille_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('marque_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('unite_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
