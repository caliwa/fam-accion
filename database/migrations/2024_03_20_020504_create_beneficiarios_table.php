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
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string('Beneficiario');
            $table->string('Genero');
            $table->string('Bancarizado');
            $table->string('Discapacidad');
            $table->unsignedBigInteger('IdEtnia');
            $table->unsignedBigInteger('IdTipoDocumento');
            $table->unsignedBigInteger('IdNivelEscolaridad');
            $table->unsignedBigInteger('IdTipoPoblacion');
            $table->string('RangoEdad');
            $table->string('Titular');
            $table->foreign('IdTipoDocumento')->references('IdTipoDocumento')->on('tipodocumento');
            $table->foreign('IdEtnia')->references('IdEtnia')->on('etnia');
            $table->foreign('IdNivelEscolaridad')->references('IdNivelEscolaridad')->on('nivelescolaridad');
            $table->foreign('IdTipoPoblacion')->references('IdTipoPoblacion')->on('tipopoblacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiarios');
    }
};
