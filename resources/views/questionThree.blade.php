<!-- resources/views/formulario_numeros.blade.php -->

@extends('layouts.app')

@section('title', 'Entrada de Números')

@section('content')
    @php
        $num = 3;
    @endphp
    <h2>Entrar com um numero para retornar sua tabuada:</h2>
    <form action="{{ url('/question-three') }}" method="post">
        @csrf
        <label for="my_num">Digite um número:</label>
        <input type="number" id="my_num" name="my_num" required><br><br>
    </form>
    @if (isset($results))
        @php
            $i = 0;
        @endphp
        @foreach ($results as $item)
            <p>{{ $my_num }} X {{ $i }} => {{ $item }}</p>
            @php
                $i++;
            @endphp
        @endforeach
    @endif
@endsection
