<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codigo_municipio_atencion" class="form-label">{{ __('Codigomunicipioatencion') }}</label>
            <input type="number" name="CodigoMunicipioAtencion" class="form-control @error('CodigoMunicipioAtencion') is-invalid @enderror" value="{{ old('CodigoMunicipioAtencion', optional($municipio)->CodigoMunicipioAtencion) }}" {{ $municipio && $municipio->CodigoMunicipioAtencion ? 'readonly ' : '' }} id="codigo_municipio_atencion" placeholder="Codigomunicipioatencion">
            {!! $errors->first('CodigoMunicipioAtencion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_municipio_atencion" class="form-label">{{ __('Nombremunicipioatencion') }}</label>
            <input type="text" name="NombreMunicipioAtencion" class="form-control @error('NombreMunicipioAtencion') is-invalid @enderror" value="{{ old('NombreMunicipioAtencion', optional($municipio)->NombreMunicipioAtencion) }}" id="nombre_municipio_atencion" placeholder="Nombremunicipioatencion">
            {!! $errors->first('NombreMunicipioAtencion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo_departamento_atencion" class="form-label">{{ __('Codigodepartamentoatencion') }}</label>
            <select name="CodigoDepartamentoAtencion" class="form-control @error('CodigoDepartamentoAtencion') is-invalid @enderror" id="codigo_departamento_atencion">
                <option value="" disabled selected>Selecciona un tipo de documento</option>
                @foreach($departamento as $id => $nombre)
                    <option value="{{ $id }}" {{ old('CodigoDepartamentoAtencion', $municipio ? $municipio->CodigoDepartamentoAtencion : '') == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('CodigoDepartamentoAtencion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>