<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_nivel_escolaridad" class="form-label">{{ __('Idnivelescolaridad') }}</label>
            <input type="number" name="IdNivelEscolaridad" class="form-control @error('IdNivelEscolaridad') is-invalid @enderror" value="{{ old('IdNivelEscolaridad', optional($nivelescolaridad)->IdNivelEscolaridad) }}" {{ $nivelescolaridad && $nivelescolaridad->IdNivelEscolaridad ? 'readonly ' : '' }} id="id_nivel_escolaridad" placeholder="Idnivelescolaridad">
            {!! $errors->first('IdNivelEscolaridad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivel_escolaridad" class="form-label">{{ __('Nivelescolaridad') }}</label>
            <input type="text" name="NivelEscolaridad" class="form-control @error('NivelEscolaridad') is-invalid @enderror" value="{{ old('NivelEscolaridad', optional($nivelescolaridad)->NivelEscolaridad) }}" id="nivel_escolaridad" placeholder="Nivelescolaridad">
            {!! $errors->first('NivelEscolaridad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>