<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asignación de Beneficio') }}
                            </span>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                <label for="search_asignacion_beneficio" class="col-form-label">Búsqueda por Cédula del Beneficiario </label>
                                </div>
                                <div class="col-auto">
                                <input type="number" wire:model.live.throttle.300ms="search_asignacion_beneficio" name="search_asignacion_beneficio" id="search_asignacion_beneficio" placeholder="Cédula" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </div>

                             <div class="float-right">
                                <a href="{{ route('asignarbeneficio.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Registro') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if (session('message'))
                        <div class="alert alert-danger text-black my-2 rounded-lg text-sm p-2 text-center" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Nro.</th>
										<th>Cédula</th>
										<th>Estado beneficiario</th>
										<th>Tipo asignación beneficio</th>
										<th>Tipo beneficio</th>
										<th>Rango beneficio consolidado asignado</th>
										<th>Código municipio atencion</th>
										<th>Cantidad de beneficiarios</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $cont = 1;
                                    @endphp
                                    @foreach ($asignarbeneficios as $asignarbeneficio)
                                        <tr>
                                            <td>{{ $cont }}</td>
                                            
											<td>{{ $asignarbeneficio->Cedula }}</td>
											<td>{{ $asignarbeneficio->EstadoBeneficiario }}</td>
											<td>{{ $asignarbeneficio->TipoAsignacionBeneficio }}</td>
											<td>{{ $asignarbeneficio->tipobeneficio->TipoBeneficio }}</td>
											<td>{{ $asignarbeneficio->rangobeneficioconsolidadoasignado->RangoBeneficioConsolidadoAsignado }}</td>
											<td>{{ $asignarbeneficio->municipio->NombreMunicipioAtencion }}</td>
											<td>{{ $asignarbeneficio->CantidadDeBeneficiarios }}</td>

                                            <td>
                                                <form action="{{ route('asignarbeneficio.destroy',$asignarbeneficio->Cedula) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asignarbeneficio.show',$asignarbeneficio->Cedula) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asignarbeneficio.edit',$asignarbeneficio->Cedula) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @php
                                            $cont++;
                                        @endphp
                                    @endforeach
                                    @if($cont == 1)
                                        <tr>
                                            <td colspan="8" class="text-center">No hay registros</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $asignarbeneficios->links() }}
            </div>
        </div>
    </div>
</div>
