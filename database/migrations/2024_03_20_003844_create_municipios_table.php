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
        Schema::create('municipios', function (Blueprint $table) {
            $table->id('CodigoMunicipioAtencion');
            $table->string('NombreMunicipioAtencion');
            $table->unsignedBigInteger('CodigoDepartamentoAtencion');
            $table->foreign('CodigoDepartamentoAtencion')->references('CodigoDepartamentoAtencion')->on('departamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipios');
    }
};
