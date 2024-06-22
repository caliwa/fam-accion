<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiarioRequest extends FormRequest
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
            'id' => 'required',
			'IdTipoDocumento' => 'required',
			'Beneficiario' => 'required|string',
			'Genero' => 'required|string',
			'Bancarizado' => 'required|string',
			'Discapacidad' => 'required|string',
			'IdEtnia' => 'required',
			'IdNivelEscolaridad' => 'required',
			'IdTipoPoblacion' => 'required',
			'RangoEdad' => 'required|string',
			'Titular' => 'required|string',
        ];
    }
}
