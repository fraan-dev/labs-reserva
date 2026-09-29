@extends('layouts.app')

@section('title', 'Editar reserva - LabsReserva')

@section('content')

<div class="card">

    <h2>Editar reserva</h2>

    @if ($errors->any())
        <div class="mensagem-erro">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('reservas.atualizar', $reserva) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <label for="laboratorio_id">
            Laboratório
        </label>

        <select
            name="laboratorio_id"
            id="laboratorio_id"
            required
        >

            @foreach ($laboratorios as $laboratorio)

                <option
                    value="{{ $laboratorio->id }}"
                    @selected(
                        old(
                            'laboratorio_id',
                            $reserva->laboratorio_id
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
            value="{{ old('responsavel', $reserva->responsavel) }}"
            required
        >

        <label for="data">
            Data
        </label>

        <input
            type="date"
            name="data"
            id="data"
            value="{{ old('data', $reserva->data) }}"
            required
        >

        <label for="hora_inicio">
            Hora de início
        </label>

        <input
            type="time"
            name="hora_inicio"
            id="hora_inicio"
            value="{{ old('hora_inicio', $reserva->hora_inicio) }}"
            required
        >

        <label for="hora_fim">
            Hora de fim
        </label>

        <input
            type="time"
            name="hora_fim"
            id="hora_fim"
            value="{{ old('hora_fim', $reserva->hora_fim) }}"
            required
        >

        <label for="finalidade">
            Finalidade
        </label>

        <textarea
            name="finalidade"
            id="finalidade"
        >{{ old('finalidade', $reserva->finalidade) }}</textarea>

        <button class="botao" type="submit">
            Salvar alterações
        </button>

    </form>

</div>

@endsection