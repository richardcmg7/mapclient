@extends('layouts.app')
@section('head')
@endsection

@section('content')
  @include('client._form',['client' => $client])
@endsection
