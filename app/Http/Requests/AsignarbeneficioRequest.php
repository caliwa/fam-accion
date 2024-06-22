<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignarbeneficioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'Cedula' => 'required|string',
			'EstadoBeneficiario' => 'required|string',
			'TipoAsignacionBeneficio' => 'required|string',
			'IdTipoBeneficio' => 'required',
			'IdRangoBeneficioConsolidadoAsignado' => 'required',
			'CodigoMunicipioAtencion' => 'required',
            'CantidadDeBeneficiarios' => 'required|numeric|between:1,10',
        ];
    }
}
