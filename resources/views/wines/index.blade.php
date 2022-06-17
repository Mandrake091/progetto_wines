@extends('layouts.default')
@section('pageTitle', 'All Wines')

@section('mainContent')
<button><a href="{{route('wines.create')}}">Crea nuovo vino</a></button>

    <h1>Vini</h1>


    @foreach ($allWines as $wine)
        <ul>
            <li><a href="{{route('wines.show', $wine->id)}}">Nome: {{ $wine->name }}</a></li>
            <li>Cantina: {{ $wine->cellar }}</li>
            <li>Tipo: {{ $wine->type }}</li>
            <li>Prezzo: {{ $wine->price }}</li>
        </ul>
    @endforeach




@endsection
