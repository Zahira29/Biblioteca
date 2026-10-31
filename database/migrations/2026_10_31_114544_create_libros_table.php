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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 150);
            $table->string('isbs', 100)->unique();
            $table->string('anio_publicacion', 100)->unique();
            $table->timestamp('precio')->nullable();});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('autores', function (Blueprint $table) {
            $table->dropForeign(['autor_id']);
        }); 

        Schema::dropIfExists('libros');
    }
};
