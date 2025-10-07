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
        Schema::create('modulo', function (Blueprint $table) {
            $table->id('idmodulo');
            $table->string('titulo', 100)->unique();
            $table->string('descripcion', 255)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }
    // ...

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
