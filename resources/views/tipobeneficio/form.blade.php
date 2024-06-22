<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_tipo_beneficio" class="form-label">{{ __('Idtipobeneficio') }}</label>
            <input type="number" name="IdTipoBeneficio" class="form-control @error('IdTipoBeneficio') is-invalid @enderror" value="{{ old('IdTipoBeneficio', optional($tipobeneficio)->IdTipoBeneficio) }}" {{ $tipobeneficio && $tipobeneficio->IdTipoBeneficio ? 'readonly ' : '' }} id="id_tipo_beneficio" placeholder="Idtipobeneficio">
            {!! $errors->first('IdTipoBeneficio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_beneficio" class="form-label">{{ __('Tipobeneficio') }}</label>
            <input type="text" name="TipoBeneficio" class="form-control @error('TipoBeneficio') is-invalid @enderror" value="{{ old('TipoBeneficio', optional($tipobeneficio)->TipoBeneficio) }}" id="tipo_beneficio" placeholder="Tipobeneficio">
            {!! $errors->first('TipoBeneficio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>