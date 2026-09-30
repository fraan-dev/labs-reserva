<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>@yield('title', 'LabsReserva')</title>

    <style>

        /* =========================
           VARIÁVEIS
        ========================== */

        :root {
            --verde-if: #88c03c;
            --verde-escuro: #527c19;
            --verde-claro: #eef7df;

            --vermelho-if: #e61a23;

            --branco: #ffffff;
            --fundo: #f4f6f3;

            --texto: #263238;
            --texto-suave: #667085;

            --borda: #e3e8df;

            --sombra:
                0 8px 30px
                rgba(34, 60, 22, 0.08);
        }


        /* =========================
           GERAL
        ========================== */

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            font-family:
                "Segoe UI",
                Arial,
                Helvetica,
                sans-serif;

            background: var(--fundo);

            color: var(--texto);
        }

        a {
            color: inherit;
        }


        /* =========================
           CABEÇALHO
        ========================== */

        .topo {
            width: 100%;

            background: #ffffff;

            border-bottom:
                1px solid
                var(--borda);

            position: sticky;

            top: 0;

            z-index: 100;
        }

        .topo-conteudo {
            width:
                min(
                    1050px,
                    calc(100% - 40px)
                );

            min-height: 72px;

            margin: 0 auto;

            display: flex;

            align-items: center;

            justify-content: center;
        }

        nav {
            width: fit-content;

            margin: 0 auto;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 14px;
        }

        nav a {
            padding: 10px 14px;

            border-radius: 8px;

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;

            color: #475467;

            transition: 0.2s ease;
        }

        nav a:hover {
            background: var(--verde-claro);

            color: var(--verde-escuro);
        }

        .link-destaque {
            background: var(--verde-if);

            color: #ffffff !important;
        }

        .link-destaque:hover {
            background: var(--verde-escuro);

            color: #ffffff !important;
        }


        /* =========================
           CONTEÚDO
        ========================== */

        main {
            min-height:
                calc(100vh - 150px);
        }

        .container {
            width:
                min(
                    1050px,
                    calc(100% - 40px)
                );

            margin: 0 auto;
        }


        /* =========================
           HOME / HERO
        ========================== */

        .hero {
            position: relative;

            overflow: hidden;

            margin-top: 30px;

            min-height: 320px;

            border-radius: 18px;

            background:
                linear-gradient(
                    90deg,
                    rgba(45, 100, 20, 0.72) 0%,
                    rgba(65, 120, 24, 0.48) 45%,
                    rgba(80, 135, 28, 0.12) 100%
                ),
                url('/imgs/img-laboratorio.jpg');

            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;

            box-shadow: var(--sombra);
        }

        .hero-conteudo {
            position: relative;

            z-index: 2;

            max-width: 650px;

            padding: 45px 48px;
        }

        .etiqueta {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 7px 12px;

            margin-bottom: 16px;

            border-radius: 999px;

            background:
                rgba(
                    255,
                    255,
                    255,
                    0.15
                );

            color: #ffffff;

            font-size: 13px;

            font-weight: 600;
        }

        .bolinha {
            width: 8px;

            height: 8px;

            border-radius: 50%;

            background: var(--vermelho-if);
        }

        .hero h1 {
            margin: 0 0 14px;

            color: #ffffff;

            font-size:
                clamp(
                    34px,
                    4vw,
                    46px
                );

            line-height: 1.1;
        }

        .hero p {
            max-width: 560px;

            margin: 0 0 24px;

            color:
                rgba(
                    255,
                    255,
                    255,
                    0.92
                );

            font-size: 16px;

            line-height: 1.6;
        }

        .hero-acoes {
            display: flex;

            flex-wrap: wrap;

            gap: 12px;
        }


        /* =========================
           BOTÕES
        ========================== */

        .botao {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            min-height: 42px;

            padding: 10px 18px;

            border: 0;

            border-radius: 8px;

            cursor: pointer;

            text-decoration: none;

            font-family: inherit;

            font-size: 14px;

            font-weight: 700;

            transition:
                transform 0.15s ease,
                box-shadow 0.15s ease,
                background-color 0.15s ease;
        }

        .botao:hover {
            transform: translateY(-2px);
        }

        .botao:active {
            transform: translateY(0);
        }

        .botao-verde {
            background: var(--verde-if);

            color: #ffffff !important;

            box-shadow:
                0 4px 12px
                rgba(82, 124, 25, 0.18);
        }

        .botao-verde:hover {
            background: var(--verde-escuro);
        }

        .botao-claro {
            background: #ffffff;

            color:
                var(--verde-escuro)
                !important;
        }

        .botao-claro:hover {
            background: var(--verde-claro);
        }

        .botao-cinza {
            background: #667085;

            color: #ffffff !important;
        }

        .botao-cinza:hover {
            background: #475467;
        }

        .botao-perigo {
            background: var(--vermelho-if);

            color: #ffffff !important;
        }

        .botao-perigo:hover {
            background: #b9161d;
        }


        /* =========================
           HOME / COMO FUNCIONA
        ========================== */

        .secao {
            padding: 38px 0;
        }

        .secao-titulo {
            margin: 0 0 7px;

            font-size: 25px;
        }

        .secao-subtitulo {
            margin: 0 0 22px;

            color: var(--texto-suave);

            line-height: 1.5;
        }

        .grid {
            display: grid;

            grid-template-columns:
                repeat(
                    3,
                    minmax(0, 1fr)
                );

            gap: 18px;
        }

        .card {
            background: var(--branco);

            border:
                1px solid
                var(--borda);

            border-radius: 14px;

            padding: 20px;

            box-shadow:
                0 4px 14px
                rgba(31, 47, 24, 0.05);

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                border-color 0.2s ease;
        }

        .card:hover {
            transform: translateY(-2px);

            box-shadow:
                0 7px 20px
                rgba(31, 47, 24, 0.08);

            border-color:
                rgba(
                    136,
                    192,
                    60,
                    0.55
                );
        }

        .secao-como-funciona {
            padding-top: 42px;
        }

        .cabecalho-como-funciona {
            text-align: center;

            margin-bottom: 26px;
        }

        .cabecalho-como-funciona .secao-subtitulo {
            margin-bottom: 0;
        }

        .card-etapa {
            text-align: center;
        }

        .numero-etapa {
            width: 42px;

            height: 42px;

            margin: 0 auto 16px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: var(--verde-claro);

            color: var(--verde-escuro);

            font-size: 17px;

            font-weight: 700;
        }

        .card-etapa h3 {
            margin: 0 0 8px;
        }

        .card-etapa p {
            margin: 0;

            color: var(--texto-suave);

            line-height: 1.5;
        }


        /* =========================
           LABORATÓRIOS
        ========================== */

        .pagina-laboratorios {
            width:
                min(
                    1050px,
                    calc(100% - 40px)
                );

            margin: 0 auto;

            padding: 38px 0 20px;
        }

        .cabecalho-laboratorios {
            text-align: center;

            margin-bottom: 28px;
        }

        .cabecalho-laboratorios h1 {
            margin: 0 0 6px;

            font-size: 34px;

            line-height: 1.1;

            color: var(--texto);
        }

        .cabecalho-laboratorios p {
            margin: 0;

            color: var(--texto-suave);

            font-size: 15px;
        }

        .grid-laboratorios {
            display: grid;

            grid-template-columns:
                repeat(
                    3,
                    minmax(0, 1fr)
                );

            gap: 18px;
        }

        .card-laboratorio {
            display: flex;

            flex-direction: column;

            min-height: auto;

            padding: 22px;

            background: #ffffff;

            border:
                1px solid
                var(--borda);

            border-radius: 12px;

            box-shadow:
                0 4px 16px
                rgba(31, 47, 24, 0.06);

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                border-color 0.2s ease;
        }

        .card-laboratorio:hover {
            transform: translateY(-3px);

            border-color:
                rgba(
                    136,
                    192,
                    60,
                    0.60
                );

            box-shadow:
                0 9px 24px
                rgba(31, 47, 24, 0.09);
        }

        .foto-laboratorio {
            width: 100%;

            height: 160px;

            margin-bottom: 18px;

            overflow: hidden;

            border-radius: 12px;
        }

        .foto-laboratorio img {
            width: 100%;

            height: 100%;

            display: block;

            object-fit: cover;
        }

        .card-laboratorio h2 {
            margin: 0 0 8px;

            text-align: center;

            font-size: 20px;
        }

        .localizacao-laboratorio {
            margin: 0;

            text-align: center;

            color: var(--texto-suave);

            font-size: 14px;
        }

        .divisor-laboratorio {
            width: 100%;

            height: 1px;

            margin: 18px 0;

            background: var(--borda);
        }

        .dados-laboratorio {
            flex: 1;
        }

        .dados-laboratorio p {
            display: flex;

            align-items: flex-start;

            gap: 8px;

            margin: 0 0 12px;

            color: var(--texto-suave);

            font-size: 14px;

            line-height: 1.45;
        }

        .dados-laboratorio strong {
            color: var(--texto);
        }

        .botao-reservar-laboratorio {
            width: 100%;

            margin-top: 12px;
        }

        .aviso-disponibilidade {
            display: flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            margin-top: 18px;

            color: var(--texto-suave);

            font-size: 13px;
        }


        /* =========================
           PÁGINA DE RESERVAS
        ========================== */

        .pagina-reservas {
            width:
                min(
                    900px,
                    calc(100% - 40px)
                );

            margin: 0 auto;

            padding: 40px 0;
        }

        .cabecalho-reservas {
            text-align: center;

            margin-bottom: 28px;
        }

        .cabecalho-reservas h1 {
            margin: 0 0 8px;

            font-size: 34px;

            line-height: 1.1;

            color: var(--texto);
        }

        .cabecalho-reservas p {
            margin: 0;

            color: var(--texto-suave);

            font-size: 15px;
        }

        .lista-reservas {
            width: 100%;

            display: flex;

            flex-direction: column;

            align-items: center;

            gap: 18px;
        }

        .card-reserva {
            width: 100%;

            max-width: 650px;

            padding: 24px;

            background: #ffffff;

            border:
                1px solid
                var(--borda);

            border-radius: 14px;

            box-shadow:
                0 5px 18px
                rgba(31, 47, 24, 0.07);

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                border-color 0.2s ease;
        }

        .card-reserva:hover {
            transform: translateY(-2px);

            border-color:
                rgba(
                    136,
                    192,
                    60,
                    0.55
                );

            box-shadow:
                0 8px 24px
                rgba(31, 47, 24, 0.09);
        }

        .cabecalho-card-reserva {
            display: flex;

            align-items: center;

            justify-content: space-between;
        }

        .reserva-etiqueta {
            display: inline-block;

            padding: 5px 10px;

            margin-bottom: 8px;

            border-radius: 20px;

            background: var(--verde-claro);

            color: var(--verde-escuro);

            font-size: 11px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 0.8px;
        }

        .card-reserva h2 {
            margin: 0;

            font-size: 22px;

            color: var(--texto);
        }

        .divisor-reserva {
            width: 100%;

            height: 1px;

            margin: 18px 0;

            background: var(--borda);
        }

        .informacoes-reserva {
            display: grid;

            grid-template-columns:
                repeat(
                    2,
                    minmax(0, 1fr)
                );

            gap: 20px 28px;
        }

        .info-reserva {
            display: flex;

            flex-direction: column;

            gap: 5px;
        }

        .info-titulo {
            color: var(--texto-suave);

            font-size: 12px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 0.5px;
        }

        .info-valor {
            color: var(--texto);

            font-size: 15px;

            line-height: 1.4;
        }

        .info-finalidade {
            grid-column: 1 / -1;
        }

        .acoes-reserva {
            display: flex;

            justify-content: flex-end;

            align-items: center;

            gap: 10px;

            margin-top: 22px;

            padding-top: 18px;

            border-top:
                1px solid
                var(--borda);
        }

        .acoes-reserva form {
            margin: 0;
        }

        .sem-reservas {
            width: 100%;

            max-width: 650px;

            padding: 35px 25px;

            text-align: center;

            background: #ffffff;

            border:
                1px solid
                var(--borda);

            border-radius: 14px;
        }

        .sem-reservas h3 {
            margin: 0 0 8px;
        }

        .sem-reservas p {
            margin: 0 0 20px;

            color: var(--texto-suave);
        }


        /* =========================
           FORMULÁRIOS
        ========================== */

        .pagina-formulario {
            width: 100%;

            display: flex;

            justify-content: center;

            padding: 42px 20px;
        }

        .form-card {
            width: 100%;

            max-width: 620px;

            margin: 0 auto;

            padding: 30px;

            background: #ffffff;

            border:
                1px solid
                var(--borda);

            border-radius: 16px;

            box-shadow:
                0 8px 28px
                rgba(34, 60, 22, 0.08);
        }

        .cabecalho-formulario {
            text-align: center;

            margin-bottom: 28px;
        }

        .cabecalho-formulario h2 {
            margin: 0 0 8px;

            font-size: 30px;

            color: var(--texto);
        }

        .cabecalho-formulario p {
            margin: 0;

            color: var(--texto-suave);

            font-size: 15px;

            line-height: 1.5;
        }

        .form-card label {
            display: block;

            margin-bottom: 7px;

            color: var(--texto);

            font-size: 14px;

            font-weight: 700;
        }

        .form-card input,
        .form-card select,
        .form-card textarea {
            width: 100%;

            display: block;

            padding: 11px 12px;

            margin-bottom: 18px;

            border:
                1px solid
                #d0d5dd;

            border-radius: 8px;

            background: #ffffff;

            color: var(--texto);

            font-family: inherit;

            font-size: 14px;

            outline: none;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease;
        }

        .form-card input:focus,
        .form-card select:focus,
        .form-card textarea:focus {
            border-color: var(--verde-if);

            box-shadow:
                0 0 0 3px
                rgba(136, 192, 60, 0.15);
        }

        .form-card textarea {
            min-height: 100px;

            resize: vertical;
        }

        .linha-horarios {
            display: grid;

            grid-template-columns:
                repeat(
                    2,
                    minmax(0, 1fr)
                );

            gap: 18px;
        }

        .acoes-formulario {
            display: flex;

            align-items: center;

            justify-content: flex-end;

            gap: 10px;

            margin-top: 4px;
        }


        /* =========================
           MENSAGENS
        ========================== */

        .mensagem-sucesso {
            width: 100%;

            max-width: 650px;

            margin:
                0 auto 20px;

            padding: 13px 15px;

            border:
                1px solid
                #b7df8c;

            border-radius: 8px;

            background: #edf9df;

            color: #3f6816;
        }

        .mensagem-erro {
            margin-bottom: 20px;

            padding: 13px 15px;

            border:
                1px solid
                #f4b3b7;

            border-radius: 8px;

            background: #fff0f1;

            color: #9e1d24;
        }

        .mensagem-erro ul {
            margin: 0;

            padding-left: 20px;
        }

        .muted {
            color: var(--texto-suave);
        }


        /* =========================
           RODAPÉ
        ========================== */

        footer {
            margin-top: 40px;

            padding: 22px;

            border-top:
                1px solid
                var(--borda);

            text-align: center;

            color: var(--texto-suave);

            background: #ffffff;

            font-size: 13px;
        }


        /* =========================
           RESPONSIVO
        ========================== */

        @media (max-width: 900px) {

            .grid-laboratorios {
                grid-template-columns:
                    repeat(
                        2,
                        minmax(0, 1fr)
                    );
            }
        }


        @media (max-width: 800px) {

            .topo-conteudo {
                min-height: auto;

                padding: 15px 0;
            }

            nav {
                width: 100%;

                flex-wrap: wrap;
            }

            .hero-conteudo {
                padding: 38px 28px;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }


        @media (max-width: 650px) {

            .pagina-laboratorios,
            .pagina-reservas {
                width:
                    calc(100% - 30px);
            }

            .grid-laboratorios {
                grid-template-columns: 1fr;
            }

            .informacoes-reserva {
                grid-template-columns: 1fr;
            }

            .info-finalidade {
                grid-column: auto;
            }

            .acoes-reserva {
                flex-direction: column;
            }

            .acoes-reserva,
            .acoes-reserva form,
            .acoes-reserva .botao,
            .acoes-reserva form .botao {
                width: 100%;
            }

            .pagina-formulario {
                padding: 30px 15px;
            }

            .form-card {
                padding: 22px;
            }

            .linha-horarios {
                grid-template-columns: 1fr;

                gap: 0;
            }

            .acoes-formulario {
                flex-direction: column-reverse;
            }

            .acoes-formulario .botao {
                width: 100%;
            }
        }

    </style>

</head>


<body>


<header class="topo">

    <div class="topo-conteudo">

        <nav>

            <a href="{{ route('home') }}">
                Início
            </a>

            <a href="{{ route('laboratorios') }}">
                Laboratórios
            </a>

            <a href="{{ route('reservas') }}">
                Reservas
            </a>

            <a
                href="{{ route('reservas.nova') }}"
                class="link-destaque"
            >
                Nova reserva
            </a>

        </nav>

    </div>

</header>


<main>

    @yield('content')

</main>


<footer>

    LabsReserva • Sistema acadêmico para reserva de laboratórios

</footer>


</body>

</html>