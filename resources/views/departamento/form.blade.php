<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codigo_departamento_atencion" class="form-label">{{ __('Codigodepartamentoatencion') }}</label>
            <input type="number" name="CodigoDepartamentoAtencion" class="form-control @error('CodigoDepartamentoAtencion') is-invalid @enderror" value="{{ old('CodigoDepartamentoAtencion', optional($departamento)->CodigoDepartamentoAtencion) }}" {{ $departamento && $departamento->CodigoDepartamentoAtencion ? 'readonly ' : '' }} id="codigo_departamento_atencion" placeholder="Codigodepartamentoatencion">
            {!! $errors->first('CodigoDepartamentoAtencion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_departamento_atencion" class="form-label">{{ __('Nombredepartamentoatencion') }}</label>
            <input type="text" name="NombreDepartamentoAtencion" class="form-control @error('NombreDepartamentoAtencion') is-invalid @enderror" value="{{ old('NombreDepartamentoAtencion', optional($departamento)->NombreDepartamentoAtencion) }}" id="nombre_departamento_atencion" placeholder="Nombredepartamentoatencion">
            {!! $errors->first('NombreDepartamentoAtencion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>