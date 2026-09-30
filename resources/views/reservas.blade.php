@extends('layouts.app')

@section('title', 'Reservas - LabsReserva')

@section('content')

<div class="pagina-reservas">

    <div class="cabecalho-reservas">

        <h1>Reservas</h1>

        <p>
            Confira e gerencie as reservas cadastradas no sistema.
        </p>

    </div>

    @if (session('sucesso'))
        <div class="mensagem-sucesso">
            {{ session('sucesso') }}
        </div>
    @endif

    
    <div class="lista-reservas">

        @forelse ($reservas as $reserva)

            <div class="card-reserva">

                <div class="cabecalho-card-reserva">

                    <div>
                        <span class="reserva-etiqueta">
                            Reserva
                        </span>

                        <h2>
                            {{ $reserva->laboratorio->nome }}
                        </h2>
                    </div>

                </div>

                <div class="divisor-reserva"></div>

                <div class="informacoes-reserva">

                    <div class="info-reserva">
                        <span class="info-titulo">
                            Local
                        </span>

                        <span class="info-valor">
                            {{ $reserva->laboratorio->localizacao }}
                        </span>
                    </div>

                    <div class="info-reserva">
                        <span class="info-titulo">
                            Responsável
                        </span>

                        <span class="info-valor">
                            {{ $reserva->responsavel }}
                        </span>
                    </div>

                    <div class="info-reserva">
                        <span class="info-titulo">
                            Data
                        </span>

                        <span class="info-valor">
                            {{ \Carbon\Carbon::parse($reserva->data)->format('d/m/Y') }}
                        </span>
                    </div>

                    <div class="info-reserva">
                        <span class="info-titulo">
                            Horário
                        </span>

                        <span class="info-valor">
                            {{ substr($reserva->hora_inicio, 0, 5) }}
                            até
                            {{ substr($reserva->hora_fim, 0, 5) }}
                        </span>
                    </div>

                    <div class="info-reserva info-finalidade">
                        <span class="info-titulo">
                            Finalidade
                        </span>

                        <span class="info-valor">
                            {{ $reserva->finalidade ?? 'Não informada' }}
                        </span>
                    </div>

                </div>

                <div class="acoes-reserva">

                    <a
                        href="{{ route('reservas.editar', $reserva) }}"
                        class="botao botao-cinza"
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
                            type="submit"
                            class="botao botao-perigo"
                        >
                            Excluir
                        </button>

                    </form>

                </div>

            </div>

        @empty

            <div class="sem-reservas">
                <h3>Nenhuma reserva cadastrada</h3>

                <p>
                    Ainda não existem reservas registradas no sistema.
                </p>

                <a
                    href="{{ route('reservas.nova') }}"
                    class="botao botao-verde"
                >
                    Fazer primeira reserva
                </a>
            </div>

        @endforelse

    </div>

</div>

@endsection