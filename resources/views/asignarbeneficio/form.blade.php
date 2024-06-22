<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            
            <label for="cedula" class="form-label">{{ __('Cedula') }}</label>
            <select name="Cedula" class="form-control @error('Cedula') is-invalid @enderror" id="cedula">
                <option value="" disabled selected>Selecciona una cédula</option>
                @foreach($beneficiarios as $cedula => $nombre)
                    <option value="{{ $nombre }}" {{ $asignarbeneficio && $asignarbeneficio->EstadoBeneficiario ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('Cedula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="estado_beneficiario" class="form-label">{{ __('Estadobeneficiario') }}</label>
            <select name="EstadoBeneficiario" class="form-control @error('EstadoBeneficiario') is-invalid @enderror" id="EstadoBeneficiario">
                @role('admin')
                    <option value="" disabled selected>Selecciona un estado</option>
                    <option value="ACTIVO" {{ $asignarbeneficio && $asignarbeneficio->EstadoBeneficiario == 'ACTIVO' ? 'selected' : '' }}>ACTIVO</option>
                    <option value="NO ACTIVO" {{ $asignarbeneficio && $asignarbeneficio->EstadoBeneficiario == 'NO ACTIVO' ? 'selected' : '' }}>NO ACTIVO</option>
                @endrole
                @role('beneficiario')
                    <option value="ACTIVO" {{ $asignarbeneficio && $asignarbeneficio->EstadoBeneficiario == 'ACTIVO' ? 'selected' : 'disabled' }}>ACTIVO</option>
                    <option value="NO ACTIVO" {{ $asignarbeneficio && $asignarbeneficio->EstadoBeneficiario == 'NO ACTIVO' ? 'selected' : 'disabled' }}>NO ACTIVO</option>
                @endrole
            </select>
            {!! $errors->first('EstadoBeneficiario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="tipo_asignacion_beneficio" class="form-label">{{ __('Tipoasignacionbeneficio') }}</label>
            <select name="TipoAsignacionBeneficio" class="form-control @error('TipoAsignacionBeneficio') is-invalid @enderror" id="TipoAsignacionBeneficio">
                @role('admin')
                    <option value="" disabled selected>Selecciona un tipo de asignacion</option>
                    <option value="ND" {{ $asignarbeneficio && $asignarbeneficio->TipoAsignacionBeneficio == 'ND' ? 'selected' : '' }}>ND</option>
                    <option value="MONETARIO" {{ $asignarbeneficio && $asignarbeneficio->TipoAsignacionBeneficio == 'MONETARIO' ? 'selected' : '' }}>MONETARIO</option>
                @endrole
                @role('beneficiario')
                    <option value="ND" {{ $asignarbeneficio && $asignarbeneficio->TipoAsignacionBeneficio == 'ND' ? 'selected' : 'disabled' }}>ND</option>
                    <option value="MONETARIO" {{ $asignarbeneficio && $asignarbeneficio->TipoAsignacionBeneficio == 'MONETARIO' ? 'selected' : 'disabled' }}>MONETARIO</option>
                @endrole
            </select>
            {!! $errors->first('TipoAsignacionBeneficio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="id_tipo_beneficio" class="form-label">{{ __('Idtipobeneficio') }}</label>
            <select name="IdTipoBeneficio" class="form-control @error('IdTipoBeneficio') is-invalid @enderror" id="id_tipo_beneficio">
                <option value="" disabled selected>Selecciona un tipo de beneficio</option>
                @foreach($tipobeneficio as $key => $tipo)
                    <option value="{{ $key }}" {{ old('IdTipoBeneficio', $asignarbeneficio ? $asignarbeneficio->IdTipoBeneficio : '') == $key ? 'selected' : '' }}>
                        {{ $tipo }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('IdTipoBeneficio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        
        <div class="form-group mb-2 mb20">
            <label for="id_rango_beneficio_consolidado_asignado" class="form-label">{{ __('Idrangobeneficioconsolidadoasignado') }}</label>
            <select name="IdRangoBeneficioConsolidadoAsignado" class="form-control @error('IdRangoBeneficioConsolidadoAsignado') is-invalid @enderror" id="id_rango_beneficio_consolidado_asignado">
                <option value="" disabled selected>Selecciona un rango de beneficio consolidado asignado</option>
                @role('admin')
                @foreach($rangobeneficioconsolidadoasignado as $key => $rango)
                    <option value="{{ $key }}" {{ old('IdRangoBeneficioConsolidadoAsignado', $asignarbeneficio ? $asignarbeneficio->IdRangoBeneficioConsolidadoAsignado : '') == $key ? 'selected' : '' }}>
                        {{ $rango }}
                    </option>
                @endforeach
                @endrole
                @role('beneficiario')
                @foreach($rangobeneficioconsolidadoasignado as $key => $rango)
                    <option value="{{ $key }}" {{ old('IdRangoBeneficioConsolidadoAsignado', $asignarbeneficio ? $asignarbeneficio->IdRangoBeneficioConsolidadoAsignado : '') == $key ? 'selected' : 'disabled' }}>
                        {{ $rango }}
                    </option>
                @endforeach
                @endrole
            </select>
            {!! $errors->first('IdRangoBeneficioConsolidadoAsignado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="codigo_municipio_atencion" class="form-label">{{ __('Codigomunicipioatencion') }}</label>
            <select name="CodigoMunicipioAtencion" class="form-control @error('CodigoMunicipioAtencion') is-invalid @enderror" id="codigo_municipio_atencion">
                <option value="" disabled selected>Selecciona un código de municipio de atención</option>
                @foreach($municipio as $codigo => $nombre)
                    <option value="{{ $codigo }}" {{ old('CodigoMunicipioAtencion', $asignarbeneficio ? $asignarbeneficio->CodigoMunicipioAtencion : '') == $codigo ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('CodigoMunicipioAtencion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="cantidad_de_beneficiarios" class="form-label">{{ __('Cantidaddebeneficiarios') }}</label>
            <input type="number" name="CantidadDeBeneficiarios" class="form-control @error('CantidadDeBeneficiarios') is-invalid @enderror" value="{{ old('CantidadDeBeneficiarios') !== null ? old('CantidadDeBeneficiarios') : ($asignarbeneficio ? $asignarbeneficio->CantidadDeBeneficiarios : '') }}" id="cantidad_de_beneficiarios" placeholder="Cantidaddebeneficiarios">
            {!! $errors->first('CantidadDeBeneficiarios', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>