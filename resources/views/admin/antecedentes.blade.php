@extends('adminlte::page')

@section('title', 'pacientes')

@section('content_header')
    <h1 style="font-weight: bold; text-align:center">Antecedentes Médicos</h1>
@stop

@section('content')

    <div id="app">
       {{--  <paciente-component></paciente-component> --}}
       <antecedente-component :user="{{Auth::user() != null ? Auth::user(): json_encode($user = array())}}"></antecedente-component>
    </div>
@stop

@section('css')
   {{--  <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @vite('resources/css/app.css')
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
    @vite('resources/js/app.js')
@stop