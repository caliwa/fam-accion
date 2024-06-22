<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Etnium
 *
 * @property $IdEtnia
 * @property $Etnia
 * @property $created_at
 * @property $updated_at
 *
 * @property Beneficiario[] $beneficiarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Etnium extends Model
{
    protected $primaryKey = 'IdEtnia';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdEtnia', 'Etnia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function beneficiarios()
    {
        return $this->hasMany(\App\Models\Beneficiario::class, 'IdEtnia', 'IdEtnia');
    }
    

}
