@extends('layouts.app')
@section('head')

@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" align="center"> Listado de Usuarios a Cargo
                </div>

                <div class="panel-body">
                    <div>
                      <a class="btn btn-primary" href="{{ route('client.create') }}">
                            Crear Nuevo usuario

                        </a>
                    </div>
                    <br>
                   <div>
                        @include('search')
                   </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-condensed" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Barrio</th>
                                    <th>Localidad</th>
                                    <th>telefono</th>
                                    <th>celular</th>
                                    <th>Latitud</th>
                                    <th>Longitud</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                <tr role="row" class="odd">
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->direccion }}</td>
                                    <td>{{ $client->barrio }}</td>
                                    <td>{{ $client->localidad }}</td>
                                    <td>{{ $client->telefono }}</td>
                                    <td>{{ $client->celular }}</td>
                                    <td>{{ $client->latitude }}</td>
                                    <td>{{ $client->longitude }}</td>
                                    <td>
                                        <div class="row">
                                        <a class="btn btn-info" href="/maptable/{{ $client->id }}/edit">Editar</a>
                                        <form class="" action="{{ route('delete_client_path', ['client' =>$client->id])}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                        </form>
                                        <!-- <a class="btn btn-danger" href="/maptable/borrar/{{ $client->id }}">X</a> -->
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="10">
                                        {{ $clients->links()}}
                                    </td>

                                </tr>


                            </tbody>
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
