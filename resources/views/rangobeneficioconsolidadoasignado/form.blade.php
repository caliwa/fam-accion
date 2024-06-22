<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_rango_beneficio_consolidado_asignado" class="form-label">{{ __('Idrangobeneficioconsolidadoasignado') }}</label>
            <input type="text" name="IdRangoBeneficioConsolidadoAsignado" class="form-control @error('IdRangoBeneficioConsolidadoAsignado') is-invalid @enderror" value="{{ old('IdRangoBeneficioConsolidadoAsignado', optional($rangobeneficioconsolidadoasignado)->IdRangoBeneficioConsolidadoAsignado) }}" {{ $rangobeneficioconsolidadoasignado && $rangobeneficioconsolidadoasignado->IdRangoBeneficioConsolidadoAsignado ? 'readonly ' : '' }} id="id_rango_beneficio_consolidado_asignado" placeholder="Idrangobeneficioconsolidadoasignado">
            {!! $errors->first('IdRangoBeneficioConsolidadoAsignado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rango_beneficio_consolidado_asignado" class="form-label">{{ __('Rangobeneficioconsolidadoasignado') }}</label>
            <input type="text" name="RangoBeneficioConsolidadoAsignado" class="form-control @error('RangoBeneficioConsolidadoAsignado') is-invalid @enderror" value="{{ old('RangoBeneficioConsolidadoAsignado', optional($rangobeneficioconsolidadoasignado)->RangoBeneficioConsolidadoAsignado) }}" id="rango_beneficio_consolidado_asignado" placeholder="Rangobeneficioconsolidadoasignado">
            {!! $errors->first('RangoBeneficioConsolidadoAsignado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>