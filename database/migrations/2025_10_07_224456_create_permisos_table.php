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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id('idpermiso');
            
            $table->foreignId('rolid')->constrained('rol')->onDelete('cascade');
            $table->foreignId('moduloid')->constrained('modulo')->onDelete('cascade');

            $table->boolean('r')->default(false)->comment('Lectura');
            $table->boolean('w')->default(false)->comment('Escritura');
            $table->boolean('u')->default(false)->comment('Actualización');
            $table->boolean('d')->default(false)->comment('Eliminación');

            $table->timestamps(); 
            $table->unique(['rolid', 'moduloid']);
        });
    }
    // ...

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
