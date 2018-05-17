@extends('layouts.app')
@section('head')
{!! $map['js'] !!} 
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading" align="center"> Sistema de Georeferenciacion 
                </div>
                
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Barrio</th>
                                <th>Ciudad</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                        </tbody>
                    </table>
                    {!! $map['html'] !!} 
                </div>
            </div>
        </div>
    </div>
</div>
       


@endsection
