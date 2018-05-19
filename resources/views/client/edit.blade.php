@extends('layouts.app') 
@section('head')
@endsection
 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" align="center"> Editar Usuario {{ $client->name}}
                </div>

                <div class="panel-body" >
                    <div class="col-md-8">
                        <form action="{{ route('client.update', ['id' => $client->id]) }}" method="POST">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="id">Id No. {{ $client->id }}</label>                      
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name',$client->name)}}">
                                </div>
                                <div class="form-group"><label for="direccion_full">Dirección completa</label><input type="text" class="form-control" name="direccion_full" value="{{ old('direccion_full', $client->direccion_full) }}"></div>
                                <div class="form-group"><label for="direccion"></label>Dirección para busqueda<input type="text" class="form-control" name="direccion" value="{{ old('direccion', $client->direccion) }}" ></div>
                                <div class="form-group"><label for="barrio">Barrio</label><input type="text" class="form-control" name="barrio" value="{{ old('barrio', $client->barrio) }}" ></div>
                                <div class="form-group"><label for="localidad">Localidad</label><input type="text" class="form-control" name="localidad" value="{{ old('localidad', $client->localidad) }}" ></div>
                                <div class="form-group"><label for="telefono">Telefono</label><input type="text" class="form-control" name="telefono" value="{{ old('telefono', $client->telefono) }}" ></div>
                            </div>
                                <div class="col-md-6">
                                <div class="form-group"><label for="celular">Celular</label><input type="text" class="form-control" name="celular" value="{{ old('celular', $client->celular) }}" ></div>
                                <div class="form-group"><label for="telefono2">Telefono 2</label><input type="text" class="form-control" name="telefono2" value="{{ old('telefono2', $client->telefono2) }}" ></div>
                                <div class="form-group"><label for="acudiente">Nombre de Acudiente</label><input type="text" class="form-control" name="acudiente" value="{{ old('acudiente', $client->acudiente) }}" ></div>
                                <div class="form-group"><label for="relacion">Relación con el Acudiente</label><input type="text" class="form-control" name="relacion" value="{{ old('relacion', $client->relacion) }}" ></div>
                                <div class="form-group"><label for="latitude">Latitud</label><input type="text" class="form-control" name="latitude" value="{{ old('latitude', $client->latitude ) }}" ></div>
                                <div class="form-group"><label for="longitude">Longitud</label><input type="text" class="form-control" name="longitude" value="{{ old('longitude', $client->longitude ) }}" ></div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Actualizar Usuario
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