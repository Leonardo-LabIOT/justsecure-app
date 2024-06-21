@extends('layouts.app')

@section('title', 'Juca Maior que Chico')

@section('content')
    <h2>Calcular Tempo para Juca ser Maior que Chico</h2>
    <form action="{{ url('/question-five') }}" method="post">
        @csrf
        <label for="crescimento">Crescimento anual de Juca (cm):</label>
        <input type="number" id="crescimento" name="crescimento" min="3" required><br><br>
        <small>O crescimento de Juca deve ser maior ou igual a 3 cm por ano.</small><br><br>

        <input type="submit" value="Calcular">
    </form>

    @if (isset($anos))
        <p>Juca demorará: {{ $anos }} anos para ser maior que Chico!</p>
    @endif
    @if (isset($never))
        <p>Juca demorará mais de {{ $never }} anos para ser maior que Chico!</p>
    @endif
@endsection
