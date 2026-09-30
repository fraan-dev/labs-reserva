@extends('layouts.app')

@section('title', 'Laboratórios - LabsReserva')

@section('content')

<div class="pagina-laboratorios">

    <div class="cabecalho-laboratorios">
        <h1>Laboratórios</h1>

        <p>
            Escolha um laboratório e consulte as opções disponíveis para reserva.
        </p>
    </div>

    <div class="grid-laboratorios">

        @forelse ($laboratorios as $laboratorio)

            <div class="card-laboratorio">

                <div class="foto-laboratorio">
                    <img
                        src="{{ asset('imgs/img-laboratorio.jpg') }}"
                        alt="Foto do {{ $laboratorio->nome }}"
                    >
                </div>

                <h2>
                    {{ $laboratorio->nome }}
                </h2>

                <p class="localizacao-laboratorio">
                    {{ $laboratorio->localizacao }}
                </p>

                <div class="divisor-laboratorio"></div>

                <div class="dados-laboratorio">

                    @if ($laboratorio->capacidade)
                        <p>
                            <span>👥</span>

                            <strong>
                                Capacidade:
                            </strong>

                            {{ $laboratorio->capacidade }} pessoas
                        </p>
                    @endif

                    
                </div>

                <a
                    href="{{ route('reservas.nova', ['laboratorio' => $laboratorio->id]) }}"
                    class="botao botao-verde botao-reservar-laboratorio"
                >
                    Reservar
                </a>

            </div>

        @empty

            <div class="card">
                <p>
                    Nenhum laboratório cadastrado.
                </p>
            </div>

        @endforelse

    </div>

    <div class="aviso-disponibilidade">
        ◷

        <span>
            A disponibilidade depende da data e do horário escolhidos.
        </span>
    </div>

</div>

@endsection