<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'LabsReserva')</title>

    <style>
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
                0 8px 30px rgba(34, 60, 22, 0.08);
        }

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
            background: var(--branco);
            border-bottom: 1px solid var(--borda);

            position: sticky;
            top: 0;

            z-index: 100;
        }

        .topo-conteudo {
            max-width: 1180px;
            min-height: 78px;

            margin: 0 auto;
            padding: 0 28px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 30px;
        }

        .marca {
            display: flex;
            align-items: center;

            gap: 13px;

            text-decoration: none;
        }

        .simbolo {
            display: grid;

            grid-template-columns:
                14px 14px 14px;

            grid-template-rows:
                14px 14px 14px 14px;

            gap: 3px;
        }

        .simbolo span {
            width: 14px;
            height: 14px;

            border-radius: 3px;

            background: var(--verde-if);
        }

        .simbolo .vermelho {
            border-radius: 50%;

            background: var(--vermelho-if);
        }

        .simbolo .vazio {
            visibility: hidden;
        }

        .marca-texto strong {
            display: block;

            font-size: 20px;
            line-height: 1;

            color: var(--texto);
        }

        .marca-texto span {
            display: block;

            margin-top: 5px;

            font-size: 12px;

            color: var(--texto-suave);
        }

        nav {
            display: flex;
            align-items: center;

            gap: 8px;
        }

        nav a {
            padding: 10px 13px;

            border-radius: 7px;

            text-decoration: none;

            font-size: 14px;
            font-weight: 600;

            color: #475467;

            transition: 0.2s ease;
        }

        nav a:hover {
            color: var(--verde-escuro);
            background: var(--verde-claro);
        }

        .link-destaque {
            background: var(--verde-if);

            color: #ffffff !important;
        }

        .link-destaque:hover {
            background: var(--verde-escuro);
        }

        /* =========================
           CONTEÚDO
        ========================== */

        main {
            min-height:
                calc(100vh - 150px);
        }

        .container {
            width: min(
                1180px,
                calc(100% - 40px)
            );

            margin: 0 auto;
        }

        /* =========================
           HERO
        ========================== */

        .hero {
            position: relative;

            overflow: hidden;

            margin-top: 34px;

            min-height: 400px;

            border-radius: 22px;

            background:
                linear-gradient(
                    115deg,
                    #315e16 0%,
                    #638f1e 45%,
                    #88c03c 100%
                );

            box-shadow: var(--sombra);
        }

        .hero::before {
            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            background:
                rgba(255, 255, 255, 0.08);

            right: -80px;
            top: -100px;
        }

        .hero::after {
            content: "";

            position: absolute;

            width: 240px;
            height: 240px;

            border-radius: 50%;

            background:
                rgba(230, 26, 35, 0.16);

            right: 120px;
            bottom: -150px;
        }

        .hero-conteudo {
            position: relative;
            z-index: 2;

            max-width: 700px;

            padding: 65px 55px;
        }

        .etiqueta {
            display: inline-flex;
            align-items: center;

            gap: 8px;

            padding: 7px 12px;

            margin-bottom: 18px;

            border-radius: 999px;

            background:
                rgba(255, 255, 255, 0.14);

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
            margin: 0 0 18px;

            color: #ffffff;

            font-size:
                clamp(
                    34px,
                    5vw,
                    54px
                );

            line-height: 1.04;
        }

        .hero p {
            max-width: 590px;

            margin: 0 0 28px;

            color:
                rgba(
                    255,
                    255,
                    255,
                    0.88
                );

            font-size: 17px;
            line-height: 1.65;
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

            min-height: 44px;

            padding: 11px 20px;

            border: 0;
            border-radius: 8px;

            cursor: pointer;

            text-decoration: none;

            font-size: 14px;
            font-weight: 700;

            transition:
                transform 0.15s ease,
                box-shadow 0.15s ease,
                background-color 0.15s ease,
                color 0.15s ease;
        }

        .botao:hover {
            transform: translateY(-2px);
        }

        .botao:active {
            transform: translateY(0);
        }

        .botao-verde {
            background-color: var(--verde-if);

            color: #ffffff !important;

            box-shadow:
                0 4px 12px
                rgba(82, 124, 25, 0.18);
        }

        .botao-verde:hover {
            background-color: var(--verde-escuro);

            color: #ffffff !important;

            box-shadow:
                0 6px 16px
                rgba(82, 124, 25, 0.28);
        }

        .botao-verde:active {
            background-color: #416714;
        }

        .botao-claro {
            background-color: #ffffff;

            color: var(--verde-escuro) !important;

            box-shadow:
                0 4px 14px
                rgba(0, 0, 0, 0.10);
        }

        .botao-claro:hover {
            background-color: var(--verde-claro);

            box-shadow:
                0 7px 18px
                rgba(0, 0, 0, 0.16);
        }

        .botao-contorno {
            color: #ffffff !important;

            border:
                1px solid
                rgba(
                    255,
                    255,
                    255,
                    0.50
                );

            background:
                rgba(
                    255,
                    255,
                    255,
                    0.08
                );
        }

        .botao-contorno:hover {
            background:
                rgba(
                    255,
                    255,
                    255,
                    0.17
                );
        }

        .botao-cinza {
            background-color: #667085;

            color: #ffffff !important;
        }

        .botao-cinza:hover {
            background-color: #475467;
        }

        .botao-perigo {
            background-color: var(--vermelho-if);

            color: #ffffff !important;
        }

        .botao-perigo:hover {
            background-color: #b9161d;
        }

        /* =========================
           SEÇÕES
        ========================== */

        .secao {
            padding: 46px 0;
        }

        .secao-titulo {
            margin: 0 0 8px;

            font-size: 27px;
        }

        .secao-subtitulo {
            margin: 0 0 25px;

            color: var(--texto-suave);

            line-height: 1.6;
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

        /* =========================
           CARDS
        ========================== */

        .card {
            background: var(--branco);

            border:
                1px solid
                var(--borda);

            border-radius: 14px;

            padding: 24px;

            box-shadow:
                0 3px 14px
                rgba(
                    31,
                    47,
                    24,
                    0.05
                );
        }

        .card:hover {
            border-color:
                rgba(
                    136,
                    192,
                    60,
                    0.5
                );
        }

        .card-icone {
            width: 45px;
            height: 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 18px;

            border-radius: 10px;

            color: var(--verde-escuro);

            background: var(--verde-claro);

            font-size: 21px;
        }

        .card h3 {
            margin: 0 0 9px;

            font-size: 18px;
        }

        .card p {
            margin: 0 0 15px;

            color: var(--texto-suave);

            line-height: 1.55;
        }

        .acoes {
            display: flex;
            flex-wrap: wrap;

            gap: 10px;
        }

        /* =========================
           FORMULÁRIOS
        ========================== */

        .pagina-formulario {
            width: 100%;

            min-height:
                calc(100vh - 180px);

            display: flex;
            justify-content: center;
            align-items: flex-start;

            padding: 45px 20px;
        }

        .form-card {
            width: 100%;
            max-width: 720px;

            margin: 0 auto;

            padding: 34px;

            border-radius: 16px;

            background: #ffffff;

            box-shadow:
                0 10px 35px
                rgba(
                    34,
                    60,
                    22,
                    0.10
                );
        }

        .cabecalho-formulario {
            margin-bottom: 28px;
        }

        .cabecalho-formulario h2 {
            margin: 0 0 8px;

            font-size: 28px;
        }

        .cabecalho-formulario p {
            margin: 0;

            color: var(--texto-suave);

            line-height: 1.5;
        }

        label {
            display: block;

            margin-bottom: 7px;

            font-size: 14px;
            font-weight: 700;
        }

        input,
        select,
        textarea {
            width: 100%;

            padding: 11px 12px;

            margin-bottom: 17px;

            border:
                1px solid
                #d0d5dd;

            border-radius: 8px;

            background: #ffffff;

            font: inherit;

            outline: none;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--verde-if);

            box-shadow:
                0 0 0 3px
                rgba(
                    136,
                    192,
                    60,
                    0.15
                );
        }

        textarea {
            min-height: 110px;

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
            justify-content: flex-end;
            align-items: center;

            gap: 12px;

            margin-top: 8px;
        }

        .mensagem-sucesso {
            padding: 13px 15px;

            margin-bottom: 20px;

            border:
                1px solid
                #b7df8c;

            border-radius: 8px;

            background: #edf9df;

            color: #3f6816;
        }

        .mensagem-erro {
            padding: 13px 15px;

            margin-bottom: 20px;

            border:
                1px solid
                #f4b3b7;

            border-radius: 8px;

            background: #fff0f1;

            color: #9e1d24;
        }

        .muted {
            color: var(--texto-suave);
        }

        /* =========================
           RODAPÉ
        ========================== */

        footer {
            margin-top: 50px;

            padding: 24px;

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

        @media (max-width: 800px) {
            .topo-conteudo {
                align-items: flex-start;

                flex-direction: column;

                padding: 18px 20px;
            }

            nav {
                width: 100%;

                flex-wrap: wrap;
            }

            .hero-conteudo {
                padding: 42px 26px;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 650px) {
            .linha-horarios {
                grid-template-columns: 1fr;

                gap: 0;
            }

            .form-card {
                padding: 24px;
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

        <a
            href="{{ route('home') }}"
            class="marca"
        >

            <div class="simbolo">

                <span class="vermelho"></span>
                <span></span>
                <span></span>

                <span></span>
                <span></span>
                <span class="vazio"></span>

                <span></span>
                <span></span>
                <span></span>

                <span></span>
                <span></span>
                <span class="vazio"></span>

            </div>

            <div class="marca-texto">
                <strong>LabsReserva</strong>

                <span>
                    Reserva de laboratórios
                </span>
            </div>

        </a>

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
    LabsReserva • Sistema acadêmico para
    reserva de laboratórios
</footer>

</body>
</html>