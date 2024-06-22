<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipodocumento
 *
 * @property $IdTipoDocumento
 * @property $TipoDocumento
 * @property $created_at
 * @property $updated_at
 *
 * @property Beneficiario[] $beneficiarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipodocumento extends Model
{
    protected $table = 'tipodocumento';
    protected $primaryKey = 'IdTipoDocumento';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdTipoDocumento', 'TipoDocumento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function beneficiarios()
    {
        return $this->hasMany(\App\Models\Beneficiario::class, 'IdTipoDocumento', 'IdTipoDocumento');
    }
    

}
