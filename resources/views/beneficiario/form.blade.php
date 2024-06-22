<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="id" class="form-label">{{ __('Cédula') }}</label>
            <input type="number" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id', $beneficiario?->id) }}" {{ $beneficiario && $beneficiario->id ? 'readonly ' : '' }} id="id" placeholder="Cédula del beneficiario">
            {!! $errors->first('id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="id_tipo_documento" class="form-label">{{ __('Idtipodocumento') }}</label>
            <select name="IdTipoDocumento" class="form-control @error('IdTipoDocumento') is-invalid @enderror" id="id_tipo_documento">
                <option value="" disabled selected>Selecciona un tipo de documento</option>
                @foreach($tipodocumento as $id => $nombre)
                    <option value="{{ $id }}" {{ old('IdTipoDocumento', $beneficiario ? $beneficiario->IdTipoDocumento : '') == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('IdTipoDocumento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="beneficiario" class="form-label">{{ __('Beneficiario') }}</label>
            <input type="text" name="Beneficiario" class="form-control @error('Beneficiario') is-invalid @enderror" value="{{ old('Beneficiario', $beneficiario?->Beneficiario) }}" id="beneficiario" placeholder="Nombre del beneficiario">
            {!! $errors->first('Beneficiario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="genero" class="form-label">{{ __('Genero') }}</label>
            <select name="Genero" class="form-control @error('Genero') is-invalid @enderror" id="genero">
                <option value="" disabled selected>Selecciona un género</option>
                <option value="Hombre" {{ $beneficiario && $beneficiario->Genero == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                <option value="Mujer" {{ $beneficiario && $beneficiario->Genero == 'Mujer' ? 'selected' : '' }}>Mujer</option>
            </select>
            {!! $errors->first('Genero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="bancarizado" class="form-label">{{ __('Bancarizado') }}</label>
            <select name="Bancarizado" class="form-control @error('Bancarizado') is-invalid @enderror" id="bancarizado">
                <option value="" disabled selected>Selecciona si eres bancarizado</option>
                <option value="SI" {{ $beneficiario && $beneficiario->Bancarizado == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ $beneficiario && $beneficiario->Bancarizado == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
            {!! $errors->first('Bancarizado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="discapacidad" class="form-label">{{ __('Discapacidad') }}</label>
            <select name="Discapacidad" class="form-control @error('Discapacidad') is-invalid @enderror" id="discapacidad">
                <option value="" disabled selected>Selecciona si tienes una discapacidad</option>
                <option value="SI" {{ $beneficiario && $beneficiario->Discapacidad == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ $beneficiario && $beneficiario->Discapacidad == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
            {!! $errors->first('Discapacidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_etnia" class="form-label">{{ __('Idetnia') }}</label>
            <select name="IdEtnia" class="form-control @error('IdEtnia') is-invalid @enderror" id="id_etnia">
                <option value="" disabled selected>Selecciona una etnia</option>
                @foreach($etnia as $id => $nombre)
                    <option value="{{ $id }}" {{ old('IdEtnia', $beneficiario ? $beneficiario->IdEtnia : '') == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('IdEtnia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="id_nivel_escolaridad" class="form-label">{{ __('Idnivelescolaridad') }}</label>
            <select name="IdNivelEscolaridad" class="form-control @error('IdNivelEscolaridad') is-invalid @enderror" id="id_nivel_escolaridad">
                <option value="" disabled selected>Selecciona un nivel de escolaridad</option>
                @foreach($nivelescolaridad as $id => $nombre)
                    <option value="{{ $id }}" {{ old('IdNivelEscolaridad', $beneficiario ? $beneficiario->IdNivelEscolaridad : '') == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('IdNivelEscolaridad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="i_d_tipo_poblacion" class="form-label">{{ __('Idtipopoblacion') }}</label>
            <select name="IdTipoPoblacion" class="form-control @error('IdTipoPoblacion') is-invalid @enderror" id="i_d_tipo_poblacion">
                <option value="" disabled selected>Selecciona un tipo de población</option>
                @foreach($tipopoblacion as $id => $nombre)
                    <option value="{{ $id }}" {{ old('IdTipoPoblacion', $beneficiario ? $beneficiario->IdTipoPoblacion : '') == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('IdTipoPoblacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="rango_edad" class="form-label">{{ __('Rangoedad') }}</label>
            <select name="RangoEdad" class="form-control @error('RangoEdad') is-invalid @enderror" id="rango_edad">
                <option value="" disabled selected>Selecciona un rango de edad</option>
                <option value="00-05" {{ $beneficiario && $beneficiario->RangoEdad == '00-05' ? 'selected' : '' }}>00-05</option>
                <option value="06-17" {{ $beneficiario && $beneficiario->RangoEdad == '06-17' ? 'selected' : '' }}>06-17</option>
                <option value="18-29" {{ $beneficiario && $beneficiario->RangoEdad == '18-29' ? 'selected' : '' }}>18-29</option>
                <option value="30-49" {{ $beneficiario && $beneficiario->RangoEdad == '30-49' ? 'selected' : '' }}>30-49</option>
                <option value="50-65" {{ $beneficiario && $beneficiario->RangoEdad == '50-65' ? 'selected' : '' }}>50-65</option>
                <option value=">65" {{ $beneficiario && $beneficiario->RangoEdad == '>65' ? 'selected' : '' }}>&gt;65</option>
            </select>
            {!! $errors->first('RangoEdad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titular" class="form-label">{{ __('Titular') }}</label>
            <select name="Titular" class="form-control @error('Titular') is-invalid @enderror" id="titular">
                <option value="" disabled selected>Selecciona si eres titular</option>
                <option value="SI" {{ $beneficiario && $beneficiario->Titular == 'SI' ? 'selected' : '' }}>SI</option>
                <option value="NO" {{ $beneficiario && $beneficiario->Titular == 'NO' ? 'selected' : '' }}>NO</option>
            </select>
            {!! $errors->first('Titular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>