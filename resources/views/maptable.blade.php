@extends('layouts.app')
@section('head')

@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" align="center"> Sistema de Georeferenciacion 
                </div>
                
                <div class="panel-body">
                    @include('search')
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
                                    <td></td>
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
