<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_tipo_documento" class="form-label">{{ __('Idtipodocumento') }}</label>
            <input type="number" name="IdTipoDocumento" class="form-control @error('IdTipoDocumento') is-invalid @enderror" value="{{ old('IdTipoDocumento', optional($tipodocumento)->IdTipoDocumento) }}" {{ $tipodocumento && $tipodocumento->IdTipoDocumento ? 'readonly ' : '' }} id="id_tipo_documento" placeholder="Idtipodocumento">
            {!! $errors->first('IdTipoDocumento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_documento" class="form-label">{{ __('Tipodocumento') }}</label>
            <input type="text" name="TipoDocumento" class="form-control @error('TipoDocumento') is-invalid @enderror" value="{{ old('TipoDocumento', optional($tipodocumento)->TipoDocumento) }}" id="tipo_documento" placeholder="Tipodocumento">
            {!! $errors->first('TipoDocumento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>