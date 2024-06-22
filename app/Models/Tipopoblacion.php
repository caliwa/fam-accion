<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipopoblacion
 *
 * @property $IdTipoPoblacion
 * @property $TipoPoblacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Beneficiario[] $beneficiarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipopoblacion extends Model
{
    protected $table = 'tipopoblacion';
    protected $primaryKey = 'IdTipoPoblacion';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdTipoPoblacion', 'TipoPoblacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function beneficiarios()
    {
        return $this->hasMany(\App\Models\Beneficiario::class, 'IdTipoPoblacion', 'IdTipoPoblacion');
    }
    

}
