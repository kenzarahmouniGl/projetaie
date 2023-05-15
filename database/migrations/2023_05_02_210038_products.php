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
    { Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->string('reference');
        $table->float('prix');
        $table->string('photo')->nullable();
        $table->timestamps();
        $table->unsignedBigInteger('collection_id');
        $table->foreign('collection_id')->references('id')->on('collections');
        $table->unsignedBigInteger('boutique_id');
        $table->foreign('boutique_id')->references('id')->on('boutique');
      
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('products');
    }
};
