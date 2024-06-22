<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipobeneficio
 *
 * @property $IdTipoBeneficio
 * @property $TipoBeneficio
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignarbeneficio[] $asignarbeneficios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipobeneficio extends Model
{
    
    protected $table = 'tipobeneficio';
    protected $primaryKey = 'IdTipoBeneficio';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdTipoBeneficio', 'TipoBeneficio'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignarbeneficios()
    {
        return $this->hasMany(\App\Models\Asignarbeneficio::class, 'IdTipoBeneficio', 'IdTipoBeneficio');
    }
    

}
