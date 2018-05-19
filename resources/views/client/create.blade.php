@extends('layouts.app') 
@section('head')
@endsection
 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" align="center"> Crear un nuevo usuario 
                </div>

                <div class="panel-body">
                    <div class="col-md-8">
                        <form action="" method="POST">
                            {{csrf_field()}}

                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name')}}">
                                </div>
                                <div class="form-group"><label for="direccion_full">Dirección completa</label><input type="text" class="form-control"
                                        name="direccion_full" value="{{ old('direccion_full') }}"></div>
                                <div class="form-group"><label for="direccion"></label>Dirección para busqueda<input type="text" class="form-control"
                                        name="direccion" value="{{ old('direccion') }}"></div>
                                <div class="form-group"><label for="barrio">Barrio</label><input type="text" class="form-control" name="barrio" value="{{ old('barrio') }}"></div>
                                <div class="form-group"><label for="localidad">Localidad</label><input type="text" class="form-control" name="localidad"
                                        value="{{ old('localidad') }}"></div>
                                <div class="form-group"><label for="telefono">Telefono</label><input type="text" class="form-control" name="telefono"
                                        value="{{ old('telefono') }}"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label for="celular">Celular</label><input type="text" class="form-control" name="celular"
                                        value="{{ old('celular') }}"></div>
                                <div class="form-group"><label for="telefono2">Telefono 2</label><input type="text" class="form-control" name="telefono2"
                                        value="{{ old('telefono2') }}"></div>
                                <div class="form-group"><label for="acudiente">Nombre de Acudiente</label><input type="text" class="form-control"
                                        name="acudiente" value="{{ old('acudiente') }}"></div>
                                <div class="form-group"><label for="relacion">Relación con el Acudiente</label><input type="text" class="form-control"
                                        name="relacion" value="{{ old('relacion') }}"></div>
                                <div class="form-group"><label for="latitude">Latitud</label><input type="text" class="form-control" name="latitude"
                                        value="{{ old('latitude') }}"></div>
                                <div class="form-group"><label for="longitude">Longitud</label><input type="text" class="form-control" name="longitude"
                                        value="{{ old('longitude') }}"></div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Crear Usuario
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection