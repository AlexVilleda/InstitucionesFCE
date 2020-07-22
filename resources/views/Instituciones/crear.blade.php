@extends('plantilla')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Agregar institución</h3>

            <form action="{{route('guardarInstitucion')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la institución" value="{{old('nombre')}}" required>
                </div>

                {{-- @error('nombre')
                    <div class="alert alert-danger">
                        El nombre es requerido
                    </div>
                @enderror --}}

                <div class="form-group">
                    <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo de institución" value="{{old('tipo')}}" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección de la institución" value="{{old('direccion')}}" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="sector" id="sector" placeholder="Sector de la institución" value="{{old('sector')}}" required>
                </div>

                <button type="submit" class="btn btn-success btn-block">Guardar institucion</button>
            </form>

            @if (session('agregada'))
                <div class="alert alert-success mt-3">
                    {{ session('agregada') }}
                </div>
            @endif
        </div>
    </div>
@endsection