@extends('plantilla')

@section('content')
<h2>Instituciones</h2>
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{route('crearInstitucion')}}" class="btn btn-primary">Agregar institución</a>
            <br><br>
            <table class="table">
                <tr>
                    {{-- <th>ID</th> --}}
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Dirección</th>
                    <th>Sector</th>
                    <th>Acción</th>

                    @foreach ($instituciones as $institucion)
                        <tr>
                            {{-- <td>{{$institucion->id}}</td> --}}
                            <td>{{$institucion->nombre}}</td>
                            <td>{{$institucion->tipo}}</td>
                            <td>{{$institucion->direccion}}</td>
                            <td>{{$institucion->sector}}</td>
                            <td>
                                <a href="{{route('editarInstitucion', $institucion->id)}}" class="btn btn-warning">Editar</a>
                                {{-- <form action="{{route('eliminarInstitucion', $institucion->id)}}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tr>
            </table>

            @if (session('eliminada'))
                <div class="alert alert-success mt-3">
                    {{session('eliminada')}}
                </div>
            @endif

            {{$instituciones->links()}}
        </div>
    </div>
@endsection