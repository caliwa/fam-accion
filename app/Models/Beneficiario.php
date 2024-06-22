<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Beneficiario
 *
 * @property $id
 * @property $IdTipoDocumento
 * @property $Beneficiario
 * @property $Genero
 * @property $Bancarizado
 * @property $Discapacidad
 * @property $IdEtnia
 * @property $IdNivelEscolaridad
 * @property $IdTipoPoblacion
 * @property $RangoEdad
 * @property $Titular
 * @property $created_at
 * @property $updated_at
 *
 * @property Etnium $etnium
 * @property Nivelescolaridad $nivelescolaridad
 * @property Tipodocumento $tipodocumento
 * @property Tipopoblacion $tipopoblacion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Beneficiario extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'IdTipoDocumento', 'Beneficiario', 'Genero', 'Bancarizado', 'Discapacidad', 'IdEtnia', 'IdNivelEscolaridad', 'IdTipoPoblacion', 'RangoEdad', 'Titular'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etnium()
    {
        return $this->belongsTo(\App\Models\Etnium::class, 'IdEtnia', 'IdEtnia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nivelescolaridad()
    {
        return $this->belongsTo(\App\Models\Nivelescolaridad::class, 'IdNivelEscolaridad', 'IdNivelEscolaridad');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipodocumento()
    {
        return $this->belongsTo(\App\Models\Tipodocumento::class, 'IdTipoDocumento', 'IdTipoDocumento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipopoblacion()
    {
        return $this->belongsTo(\App\Models\Tipopoblacion::class, 'IdTipoPoblacion', 'IdTipoPoblacion');
    }
    

}
