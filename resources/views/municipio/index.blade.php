@extends('layouts.app')

@role('admin')
    @section('template_title')
        Municipio
    @endsection

    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Municipio') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('municipio.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                            <th>Código municipio atención</th>
                                            <th>Nombre municipio atención</th>
                                            <th>Código departamento atención</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($municipios as $municipio)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $municipio->CodigoMunicipioAtencion }}</td>
                                                <td>{{ $municipio->NombreMunicipioAtencion }}</td>
                                                <td>{{ $municipio->departamento->NombreDepartamentoAtencion }}</td>

                                                <td>
                                                    <form action="{{ route('municipio.destroy',$municipio->CodigoMunicipioAtencion) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('municipio.show',$municipio->CodigoMunicipioAtencion) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('municipio.edit',$municipio->CodigoMunicipioAtencion) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                    {!! $municipios->links() !!}
                </div>
            </div>
        </div>
    @endsection
@endrole
