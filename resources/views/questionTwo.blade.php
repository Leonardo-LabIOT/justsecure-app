@extends('layouts.app')

@section('title', 'Entrada de Números')

@section('content')
    @php
        $num = 20;
    @endphp
    <h2>Entrar com {{ $num }} números</h2>
    <form action="{{ url('/question-two') }}" method="post">
        @csrf
        @for ($i = 1; $i <= $num; $i++)
            <label for="num{{ $i }}">Número {{ $i }}:</label>
            <input type="number" id="num{{ $i }}" name="num{{ $i }}" required><br>
        @endfor
        <br>
        <input type="submit" value="Calcular">
    </form>
    @if (isset($somaPositivos))
        <p>A Soma dos Positivos é: {{ $somaPositivos }}</p>
    @endif
    @if (isset($totalNegativos))
        <p>O Total de Negativos é: {{ $totalNegativos }}</p>
    @endif
@endsection
