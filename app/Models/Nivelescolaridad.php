<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nivelescolaridad
 *
 * @property $IdNivelEscolaridad
 * @property $NivelEscolaridad
 * @property $created_at
 * @property $updated_at
 *
 * @property Beneficiario[] $beneficiarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nivelescolaridad extends Model
{
    protected $table = 'nivelescolaridad';
    protected $primaryKey = 'IdNivelEscolaridad';


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdNivelEscolaridad', 'NivelEscolaridad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function beneficiarios()
    {
        return $this->hasMany(\App\Models\Beneficiario::class, 'IdNivelEscolaridad', 'IdNivelEscolaridad');
    }
    

}
