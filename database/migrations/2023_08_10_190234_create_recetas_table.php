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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cita_id')->unsigned();
            $table->foreign('cita_id')->references('id')->on('Citas')->onDelete('cascade');
            $table->bigInteger('Preceta_id')->unsigned();
            $table->foreign('Preceta_id')->references('paciente_id')->on('Citas')->onDelete('cascade');
            $table->string('tratamiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
