<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignarbeneficio
 *
 * @property $id
 * @property $Cedula
 * @property $EstadoBeneficiario
 * @property $TipoAsignacionBeneficio
 * @property $IdTipoBeneficio
 * @property $IdRangoBeneficioConsolidadoAsignado
 * @property $CodigoMunicipioAtencion
 * @property $CantidadDeBeneficiarios
 * @property $created_at
 * @property $updated_at
 *
 * @property Municipio $municipio
 * @property Rangobeneficioconsolidadoasignado $rangobeneficioconsolidadoasignado
 * @property Tipobeneficio $tipobeneficio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignarbeneficio extends Model
{
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Cedula', 'EstadoBeneficiario', 'TipoAsignacionBeneficio', 'IdTipoBeneficio', 'IdRangoBeneficioConsolidadoAsignado', 'CodigoMunicipioAtencion', 'CantidadDeBeneficiarios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipio()
    {
        return $this->belongsTo(\App\Models\Municipio::class, 'CodigoMunicipioAtencion', 'CodigoMunicipioAtencion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rangobeneficioconsolidadoasignado()
    {
        return $this->belongsTo(\App\Models\Rangobeneficioconsolidadoasignado::class, 'IdRangoBeneficioConsolidadoAsignado', 'IdRangoBeneficioConsolidadoAsignado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipobeneficio()
    {
        return $this->belongsTo(\App\Models\Tipobeneficio::class, 'IdTipoBeneficio', 'IdTipoBeneficio');
    }
    

}
