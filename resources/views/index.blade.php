@extends('layouts.app')
@section('title','teste')
@section('content')
@foreach ($categorias as $categoria)
{{$categoria->nome}} - {{$categoria->descricao}}
@endforeach

@endsection