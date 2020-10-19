@extends('layouts.ejemploLayout')

@section('titulo', 'Página 01 del proyecto')


@section('barralateral')
    <p> Esta parte está en la barra lateral</p>
@endsection


@section('contenido')
    <p> Este está en el body</p>

    <a href="{{ url('pagina02') }}" class="btn btn-xs btn-info pull-right"> Página 02 </a>

@endsection