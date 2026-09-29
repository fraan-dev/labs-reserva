@extends('layouts.app')

@section('title', 'Nova reserva - LabsReserva')

@section('content')

<div class="pagina-formulario">

    <div class="card form-card">

        <div class="cabecalho-formulario">
            <h2>Nova reserva</h2>

            <p>
                Preencha os dados abaixo para reservar um laboratório.
            </p>
        </div>

        @if ($errors->any())
            <div class="mensagem-erro">
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reservas.store') }}" method="POST">

            @csrf

            <label for="laboratorio_id">
                Laboratório
            </label>

            <select
                name="laboratorio_id"
                id="laboratorio_id"
                required
            >
                <option value="">
                    Selecione um laboratório
                </option>

                @foreach ($laboratorios as $laboratorio)
                    <option
                        value="{{ $laboratorio->id }}"
                        @selected(
                            old(
                                'laboratorio_id',
                                $laboratorioSelecionado ?? null
                            ) == $laboratorio->id
                        )
                    >
                        {{ $laboratorio->nome }}
                        - {{ $laboratorio->localizacao }}
                    </option>
                @endforeach
            </select>

            <label for="responsavel">
                Responsável
            </label>

            <input
                type="text"
                name="responsavel"
                id="responsavel"
                value="{{ old('responsavel') }}"
                placeholder="Digite o nome do responsável"
                required
            >

            <label for="data">
                Data
            </label>

            <input
                type="date"
                name="data"
                id="data"
                value="{{ old('data') }}"
                required
            >

            <div class="linha-horarios">

                <div>
                    <label for="hora_inicio">
                        Hora de início
                    </label>

                    <input
                        type="text"
                        name="hora_inicio"
                        id="hora_inicio"
                        value="{{ old('hora_inicio') }}"
                        placeholder="Ex.: 14:00"
                        pattern="^([01]\d|2[0-3]):[0-5]\d$"
                        maxlength="5"
                        required
                    >
                </div>

                <div>
                    <label for="hora_fim">
                        Hora de fim
                    </label>

                    <input
                        type="text"
                        name="hora_fim"
                        id="hora_fim"
                        value="{{ old('hora_fim') }}"
                        placeholder="Ex.: 16:00"
                        pattern="^([01]\d|2[0-3]):[0-5]\d$"
                        maxlength="5"
                        required
                    >
                </div>

            </div>

            <label for="finalidade">
                Finalidade
            </label>

            <textarea
                name="finalidade"
                id="finalidade"
                placeholder="Ex.: Aula de Sistemas Distribuídos"
            >{{ old('finalidade') }}</textarea>

            <div class="acoes-formulario">

                <a
                    href="{{ route('reservas') }}"
                    class="botao botao-cinza"
                >
                    Cancelar
                </a>

                <button
                    class="botao botao-verde"
                    type="submit"
                >
                    Reservar laboratório
                </button>

            </div>

        </form>

    </div>

</div>

@endsection