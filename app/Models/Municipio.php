<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 *
 * @property $CodigoMunicipioAtencion
 * @property $NombreMunicipioAtencion
 * @property $CodigoDepartamentoAtencion
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Asignarbeneficio[] $asignarbeneficios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Municipio extends Model
{
    protected $primaryKey = 'CodigoMunicipioAtencion';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['CodigoMunicipioAtencion', 'NombreMunicipioAtencion', 'CodigoDepartamentoAtencion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departamento()
    {
        return $this->belongsTo(\App\Models\Departamento::class, 'CodigoDepartamentoAtencion', 'CodigoDepartamentoAtencion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignarbeneficios()
    {
        return $this->hasMany(\App\Models\Asignarbeneficio::class, 'CodigoMunicipioAtencion', 'CodigoMunicipioAtencion');
    }
    

}
