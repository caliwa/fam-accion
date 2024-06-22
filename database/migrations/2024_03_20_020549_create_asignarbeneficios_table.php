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
        Schema::create('asignarbeneficios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Cedula')->unique();
            $table->unsignedBigInteger('IdTipoBeneficio');
            $table->unsignedBigInteger('IdRangoBeneficioConsolidadoAsignado');
            $table->unsignedBigInteger('CodigoMunicipioAtencion');
            $table->unsignedBigInteger('CantidadDeBeneficiarios');
            $table->string('EstadoBeneficiario');
            $table->string('TipoAsignacionBeneficio');
            $table->foreign('Cedula')->references('id')->on('beneficiarios')->onDelete('cascade');
            $table->foreign('IdTipoBeneficio')->references('IdTipoBeneficio')->on('tipobeneficio');
            $table->foreign('IdRangoBeneficioConsolidadoAsignado')->references('IdRangoBeneficioConsolidadoAsignado')->on('rangobeneficioconsolidadoasignado');
            $table->foreign('CodigoMunicipioAtencion')->references('CodigoMunicipioAtencion')->on('municipios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignarbeneficios');
    }
};