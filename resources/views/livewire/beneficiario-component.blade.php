<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Beneficiario') }}
                            </span>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                <label for="search_beneficiario" class="col-form-label">Búsqueda por Nombre del Beneficiario </label>
                                </div>
                                <div class="col-auto">
                                <input wire:model.live.throttle.5ms="search_beneficiario" name="search_beneficiario" id="search_beneficiario" placeholder="Ingresar texto" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                <label for="search_beneficiario_ced" class="col-form-label">Búsqueda por Cédula del Beneficiario </label>
                                </div>
                                <div class="col-auto">
                                <input wire:model.live.throttle.5ms="search_beneficiario_ced" name="search_beneficiario_ced" id="search_beneficiario_ced" placeholder="Cédula" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </div>


                            <div class="float-right">
                                <a href="{{ route('beneficiario.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Tipo documento</th>
                                        <th>Beneficiario</th>
                                        <th>Género</th>
                                        <th>Bancarizado</th>
                                        <th>Discapacidad</th>
                                        <th>Étnia</th>
                                        <th>Nivel escolaridad</th>
                                        <th>Tipo población</th>
                                        <th>Rango edad</th>
                                        <th>Titular</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $cont = 1;
                                    @endphp
                                    @foreach ($beneficiarios as $beneficiario)
                                        <tr>
                                            <td>{{$cont}}</td>

                                            <td>{{ $beneficiario->tipodocumento->TipoDocumento }}</td>
                                            <td>{{ $beneficiario->Beneficiario . " CC:" . $beneficiario->id }}</td>
                                            <td>{{ $beneficiario->Genero }}</td>
                                            <td>{{ $beneficiario->Bancarizado }}</td>
                                            <td>{{ $beneficiario->Discapacidad }}</td>
                                            <td>{{ $beneficiario->etnium->Etnia }}</td>
                                            <td>{{ $beneficiario->nivelescolaridad->NivelEscolaridad }}</td>
                                            <td>{{ $beneficiario->tipopoblacion->TipoPoblacion }}</td>
                                            <td>{{ $beneficiario->RangoEdad }}</td>
                                            <td>{{ $beneficiario->Titular }}</td>

                                            <td>
                                                <form action="{{ route('beneficiario.destroy',$beneficiario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('beneficiario.show',$beneficiario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('beneficiario.edit',$beneficiario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                                            <td colspan="11" class="text-center">No hay registros</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $beneficiarios->links() }}
            </div>
        </div>
    </div>
</div>