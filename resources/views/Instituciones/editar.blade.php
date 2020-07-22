@extends('plantilla')

@section('content')
    <h3 class="text-center mb-3 pt-3">Editar la institución: {{$institucionActualizar->nombre}}</h3>

    <form action="{{route('actualizarInstitucion', $institucionActualizar->id)}}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la institución" value="{{$institucionActualizar->nombre}}" required>
        </div>


        <div class="form-group">
            <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo de institución" value="{{$institucionActualizar->tipo}}" required>
        </div>


        <div class="form-group">
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección de la institución" value="{{$institucionActualizar->direccion}}" required>
        </div>


        <div class="form-group">
            <input type="text" class="form-control" name="sector" id="sector" placeholder="Sector de la institución" value="{{$institucionActualizar->sector}}" required>
        </div>

        <button type="submit" class="btn btn-warning btn-block">Editar institución</button>
    </form>

    @if (session('actualizada'))
        <div class="alert alert-success mt-3">
            {{ session('actualizada') }}
        </div>
    @endif
@endsection