<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rangobeneficioconsolidadoasignado
 *
 * @property $IdRangoBeneficioConsolidadoAsignado
 * @property $RangoBeneficioConsolidadoAsignado
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignarbeneficio[] $asignarbeneficios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rangobeneficioconsolidadoasignado extends Model
{
    protected $table = 'Rangobeneficioconsolidadoasignado';
    protected $primaryKey = 'IdRangoBeneficioConsolidadoAsignado';

    
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdRangoBeneficioConsolidadoAsignado', 'RangoBeneficioConsolidadoAsignado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignarbeneficios()
    {
        return $this->hasMany(\App\Models\Asignarbeneficio::class, 'IdRangoBeneficioConsolidadoAsignado', 'IdRangoBeneficioConsolidadoAsignado');
    }
    

}
