@extends('layouts.app')

@section('title', 'Laboratórios - LabsReserva')

@section('content')

<h2>Laboratórios disponíveis</h2>

<p class="muted">
    Estes são os laboratórios disponíveis para reserva no prédio principal.
</p>

<div class="grid">

    @forelse ($laboratorios as $laboratorio)

        <div class="card">

            <h3>{{ $laboratorio->nome }}</h3>

            <p>
                <strong>Localização:</strong><br>
                {{ $laboratorio->localizacao }}
            </p>

            @if ($laboratorio->capacidade)
                <p>
                    <strong>Capacidade:</strong><br>
                    {{ $laboratorio->capacidade }} pessoas
                </p>
            @endif

            <p>
                <strong>Descrição:</strong><br>
                {{ $laboratorio->descricao }}
            </p>

            <a
                href="{{ route('reservas.nova', ['laboratorio' => $laboratorio->id]) }}"
                class="botao botao-verde"
            >
                Reservar
            </a>

        </div>

    @empty

        <div class="card">
            <p>Nenhum laboratório cadastrado.</p>
        </div>

    @endforelse

</div>

@endsection