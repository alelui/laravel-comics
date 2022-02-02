
@extends('layout.base')

@section('pageTitle')
    HOME
@endsection

@section('pageContent')
    <h1>Primo_Contatto</h1>
    @foreach ($credentials as $item)
        <p>{{$item["nome"]}}, {{$item["cognome"]}}</p>
    @endforeach
@endsection