@extends('layouts.app')

@section('title', 'Classificação de Triângulo')

@section('content')
    <h2>Classificação de Triângulo</h2>
    <form action="{{ url('/question-one') }}" method="post">
        @csrf
        <label for="lado1">Lado 1:</label>
        <input type="text" id="lado1" name="lado1" required><br><br>

        <label for="lado2">Lado 2:</label>
        <input type="text" id="lado2" name="lado2" required><br><br>

        <label for="lado3">Lado 3:</label>
        <input type="text" id="lado3" name="lado3" required><br><br>

        <input type="submit" value="Classificar Triângulo">
    </form>

    @if(isset($numero))
        <p>{{ $numero }}</p>
    @endif
@endsection
