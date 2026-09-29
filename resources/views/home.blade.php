@extends('layouts.app')

@section(
    'title',
    'Início - LabsReserva'
)

@section('content')

<div class="container">

    <section class="hero">

        <div class="hero-conteudo">

            <div class="etiqueta">
                <span class="bolinha"></span>

                Sistema de reservas
            </div>

            <h1>
                Reserve laboratórios
                de forma simples
                e organizada.
            </h1>

            <p>
                Consulte os laboratórios
                disponíveis no prédio principal,
                escolha a data e o horário
                e organize suas reservas
                em poucos passos.
            </p>

            <div class="hero-acoes">

                <a
                    href="{{ route('reservas.nova') }}"
                    class="botao botao-claro"
                >
                    Fazer uma reserva
                </a>

                <a
                    href="{{ route('laboratorios') }}"
                    class="botao botao-contorno"
                >
                    Ver laboratórios
                </a>

            </div>

        </div>

    </section>

    <section class="secao">

        <h2 class="secao-titulo">
            O que você deseja fazer?
        </h2>

        <p class="secao-subtitulo">
            Acesse rapidamente as principais
            funções do LabsReserva.
        </p>

        <div class="grid">

            <div class="card">

                <div class="card-icone">
                    ▦
                </div>

                <h3>
                    Laboratórios
                </h3>

                <p>
                    Consulte os três
                    laboratórios disponíveis
                    para reserva no prédio
                    principal.
                </p>

                <a
                    href="{{ route('laboratorios') }}"
                    class="botao botao-verde"
                >
                    Ver laboratórios
                </a>

            </div>

            <div class="card">

                <div class="card-icone">
                    ◷
                </div>

                <h3>
                    Reservas
                </h3>

                <p>
                    Visualize os agendamentos
                    cadastrados, horários
                    e responsáveis.
                </p>

                <a
                    href="{{ route('reservas') }}"
                    class="botao botao-verde"
                >
                    Ver reservas
                </a>

            </div>

            <div class="card">

                <div class="card-icone">
                    ＋
                </div>

                <h3>
                    Nova reserva
                </h3>

                <p>
                    Escolha um laboratório,
                    informe data, horário,
                    responsável e finalidade.
                </p>

                <a
                    href="{{ route('reservas.nova') }}"
                    class="botao botao-verde"
                >
                    Reservar agora
                </a>

            </div>

        </div>

    </section>

</div>

@endsection