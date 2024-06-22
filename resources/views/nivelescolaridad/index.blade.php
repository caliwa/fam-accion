@extends('layouts.app')

@role('admin')
    @section('template_title')
        Nivelescolaridad
    @endsection

    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Nivel Escolaridad') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('nivelescolaridad.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                            <th>Nro.</th>
                                            <th>ID Nivel escolaridad</th>
                                            <th>Nivel escolaridad</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nivelescolaridades as $nivelescolaridad)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $nivelescolaridad->IdNivelEscolaridad }}</td>
                                                <td>{{ $nivelescolaridad->NivelEscolaridad }}</td>

                                                <td>
                                                    <form action="{{ route('nivelescolaridad.destroy',$nivelescolaridad->IdNivelEscolaridad) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('nivelescolaridad.show',$nivelescolaridad->IdNivelEscolaridad) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('nivelescolaridad.edit',$nivelescolaridad->IdNivelEscolaridad) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                    {!! $nivelescolaridades->links() !!}
                </div>
            </div>
        </div>
    @endsection
@endrole
