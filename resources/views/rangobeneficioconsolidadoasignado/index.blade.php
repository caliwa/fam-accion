@extends('layouts.app')

@role('admin')
    @section('template_title')
        Rangobeneficioconsolidadoasignado
    @endsection

    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Rango de beneficio consolidado asignado') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('rangobeneficioconsolidadoasignado.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                        <div class="card-body bg-white">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>Nro</th>
                                            <th>ID Rango beneficio consolidado asignado</th>
                                            <th>Rango beneficio consolidado asignado</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rangobeneficioconsolidadoasignados as $rangobeneficioconsolidadoasignado)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $rangobeneficioconsolidadoasignado->IdRangoBeneficioConsolidadoAsignado }}</td>
                                                <td>{{ $rangobeneficioconsolidadoasignado->RangoBeneficioConsolidadoAsignado }}</td>

                                                <td>
                                                    <form action="{{ route('rangobeneficioconsolidadoasignado.destroy',$rangobeneficioconsolidadoasignado->IdRangoBeneficioConsolidadoAsignado) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('rangobeneficioconsolidadoasignado.show',$rangobeneficioconsolidadoasignado->IdRangoBeneficioConsolidadoAsignado) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('rangobeneficioconsolidadoasignado.edit',$rangobeneficioconsolidadoasignado->IdRangoBeneficioConsolidadoAsignado) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $rangobeneficioconsolidadoasignados->links() !!}
                </div>
            </div>
        </div>
    @endsection
@endrole
