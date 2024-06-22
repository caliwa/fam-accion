<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_etnia" class="form-label">{{ __('Idetnia') }}</label>
            <input type="number" name="IdEtnia" class="form-control @error('IdEtnia') is-invalid @enderror" value="{{ old('IdEtnia', optional($etnium)->IdEtnia) }}" {{ $etnium && $etnium->IdEtnia ? 'readonly ' : '' }} id="id_etnia" placeholder="Idetnia">
            {!! $errors->first('IdEtnia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="etnia" class="form-label">{{ __('Etnia') }}</label>
            <input type="text" name="Etnia" class="form-control @error('Etnia') is-invalid @enderror" value="{{ old('Etnia', optional($etnium)->Etnia) }}" id="etnia" placeholder="Etnia">
            {!! $errors->first('Etnia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>