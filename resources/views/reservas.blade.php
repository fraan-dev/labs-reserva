@extends('layouts.app')

@section('title', 'Reservas - LabsReserva')

@section('content')

<h2>Reservas</h2>

@if (session('sucesso'))
    <div class="mensagem-sucesso">
        {{ session('sucesso') }}
    </div>
@endif

<div class="acoes">
    <a class="botao" href="{{ route('reservas.nova') }}">
        Nova reserva
    </a>
</div>

<br>

@forelse ($reservas as $reserva)

    <div class="card">

        <h3>{{ $reserva->laboratorio->nome }}</h3>

        <p>
            <strong>Local:</strong>
            {{ $reserva->laboratorio->localizacao }}
        </p>

        <p>
            <strong>Responsável:</strong>
            {{ $reserva->responsavel }}
        </p>

        <p>
            <strong>Data:</strong>
            {{ $reserva->data }}
        </p>

        <p>
            <strong>Horário:</strong>
            {{ $reserva->hora_inicio }}
            até
            {{ $reserva->hora_fim }}
        </p>

        <p>
            <strong>Finalidade:</strong>
            {{ $reserva->finalidade ?? 'Não informada' }}
        </p>

        <div class="acoes">

            <a
                class="botao botao-secundario"
                href="{{ route('reservas.editar', $reserva) }}"
            >
                Editar
            </a>

            <form
                action="{{ route('reservas.excluir', $reserva) }}"
                method="POST"
                onsubmit="return confirm('Tem certeza que deseja excluir esta reserva?');"
            >
                @csrf
                @method('DELETE')

                <button
                    class="botao botao-perigo"
                    type="submit"
                >
                    Excluir
                </button>

            </form>

        </div>

    </div>

@empty

    <div class="card">
        <p>Nenhuma reserva cadastrada.</p>
    </div>

@endforelse

@endsection