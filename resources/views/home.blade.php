@extends('layouts.app')

@section('title', 'Início - LabsReserva')

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
                de forma simples e organizada.
            </h1>

            <p>
                Consulte os laboratórios disponíveis,
                escolha a data e o horário e faça
                sua reserva em poucos passos.
            </p>

            <div class="hero-acoes">

                <a
                    href="{{ route('reservas.nova') }}"
                    class="botao botao-claro"
                >
                    Nova reserva
                </a>

            </div>

        </div>

    </section>


    <section class="secao secao-como-funciona">

        <div class="cabecalho-como-funciona">

            <h2 class="secao-titulo">
                Como funciona?
            </h2>

            <p class="secao-subtitulo">
                Faça uma reserva em três passos simples.
            </p>

        </div>


        <div class="grid">

            <div class="card card-etapa">

                <div class="numero-etapa">
                    1
                </div>

                <h3>
                    Escolha o laboratório
                </h3>

                <p>
                    Selecione um dos laboratórios
                    disponíveis no prédio principal.
                </p>

            </div>


            <div class="card card-etapa">

                <div class="numero-etapa">
                    2
                </div>

                <h3>
                    Informe o horário
                </h3>

                <p>
                    Escolha a data, hora de início
                    e hora de término da reserva.
                </p>

            </div>


            <div class="card card-etapa">

                <div class="numero-etapa">
                    3
                </div>

                <h3>
                    Confirme a reserva
                </h3>

                <p>
                    Informe o responsável e a finalidade
                    e finalize o agendamento.
                </p>

            </div>

        </div>

    </section>

</div>

@endsection