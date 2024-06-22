<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_tipo_poblacion" class="form-label">{{ __('Idtipopoblacion') }}</label>
            <input type="number" name="IdTipoPoblacion" class="form-control @error('IdTipoPoblacion') is-invalid @enderror" value="{{ old('IdTipoPoblacion', optional($tipopoblacion)->IdTipoPoblacion) }}" {{ $tipopoblacion && $tipopoblacion->IdTipoPoblacion ? 'readonly ' : '' }} id="id_tipo_poblacion" placeholder="Idtipopoblacion">
            {!! $errors->first('IdTipoPoblacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_poblacion" class="form-label">{{ __('Tipopoblacion') }}</label>
            <input type="text" name="TipoPoblacion" class="form-control @error('TipoPoblacion') is-invalid @enderror" value="{{ old('TipoPoblacion', optional($tipopoblacion)->TipoPoblacion) }}" id="tipo_poblacion" placeholder="Tipopoblacion">
            {!! $errors->first('TipoPoblacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>