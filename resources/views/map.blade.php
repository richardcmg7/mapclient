@extends('layouts.app')
@section('head')
{!! $map['js'] !!} 
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading" align="center"> Sistema de Georeferenciacion - Mapa
                </div>
                
                <div class="panel-body">
                   {!! $map['html'] !!} 
                </div>
            </div>
        </div>
    </div>
</div>
       


@endsection
