@extends('layouts.app')

@section('title', 'Buscar Mês')

@section('content')
    <h2>Buscar Mês pelo Número</h2>
    <form action="{{ url('/question-four') }}" method="post">
        @csrf
        <label for="numero">Digite um número de 1 a 12:</label>
        <input type="number" id="numero" name="numero" min="1" max="12" required><br><br>

        <input type="submit" value="Buscar">
    </form>
       @if(isset($message))
        <p>{{ $message }}</p>
    @endif
@endsection

