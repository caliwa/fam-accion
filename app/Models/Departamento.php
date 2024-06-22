<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 *
 * @property $CodigoDepartamentoAtencion
 * @property $NombreDepartamentoAtencion
 * @property $created_at
 * @property $updated_at
 *
 * @property Municipio[] $municipios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Departamento extends Model
{
    
    protected $table = 'departamento';
    protected $primaryKey = 'CodigoDepartamentoAtencion';


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['CodigoDepartamentoAtencion', 'NombreDepartamentoAtencion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipios()
    {
        return $this->hasMany(\App\Models\Municipio::class, 'CodigoDepartamentoAtencion', 'CodigoDepartamentoAtencion');
    }
    

}
