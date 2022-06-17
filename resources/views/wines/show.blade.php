@extends('layouts.default')
@section('pageTitle', 'Wine')

@section('mainContent')
<button><a href="{{route('wines.index')}}">Ritorna</a></button>
    <h1>Vini</h1>
        <ul>

            <li>Nome: {{ $wine->name }}</a></li>
            <li>Cantina: {{ $wine->cellar }}</li>
            <li>Tipo: {{ $wine->type }}</li>
            <li>Prezzo: {{ $wine->price }}</li>

        </ul>




@endsection