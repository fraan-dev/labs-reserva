<?php

use App\Models\Laboratorio;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LABORATÓRIOS
|--------------------------------------------------------------------------
*/

Route::get('/laboratorios', function () {
    return response()->json(
        Laboratorio::all()
    );
});


/*
|--------------------------------------------------------------------------
| RESERVAS
|--------------------------------------------------------------------------
*/

Route::get('/reservas', function () {
    $reservas = Reserva::with('laboratorio')
        ->orderBy('data')
        ->orderBy('hora_inicio')
        ->get();

    return response()->json($reservas);
});


/*
|--------------------------------------------------------------------------
| CRIAR RESERVA
|--------------------------------------------------------------------------
*/

Route::post('/reservas', function (Request $request) {

    $dados = $request->validate([
        'laboratorio_id' => [
            'required',
            'exists:laboratorios,id',
        ],

        'responsavel' => [
            'required',
            'string',
            'max:255',
        ],

        'data' => [
            'required',
            'date',
        ],

        'hora_inicio' => [
            'required',
        ],

        'hora_fim' => [
            'required',
            'after:hora_inicio',
        ],

        'finalidade' => [
            'nullable',
            'string',
        ],
    ]);

    $conflito = Reserva::where(
        'laboratorio_id',
        $dados['laboratorio_id']
    )
        ->where('data', $dados['data'])
        ->where(function ($query) use ($dados) {
            $query
                ->where(
                    'hora_inicio',
                    '<',
                    $dados['hora_fim']
                )
                ->where(
                    'hora_fim',
                    '>',
                    $dados['hora_inicio']
                );
        })
        ->exists();

    if ($conflito) {
        return response()->json([
            'erro' =>
                'Esse laboratório já possui uma reserva nesse horário.',
        ], 422);
    }

    $reserva = Reserva::create($dados);

    return response()->json([
        'mensagem' =>
            'Reserva criada com sucesso.',

        'reserva' =>
            $reserva->load('laboratorio'),
    ], 201);
});


/*
|--------------------------------------------------------------------------
| ATUALIZAR RESERVA
|--------------------------------------------------------------------------
*/

Route::put('/reservas/{reserva}', function (
    Request $request,
    Reserva $reserva
) {

    $dados = $request->validate([
        'laboratorio_id' => [
            'required',
            'exists:laboratorios,id',
        ],

        'responsavel' => [
            'required',
            'string',
            'max:255',
        ],

        'data' => [
            'required',
            'date',
        ],

        'hora_inicio' => [
            'required',
        ],

        'hora_fim' => [
            'required',
            'after:hora_inicio',
        ],

        'finalidade' => [
            'nullable',
            'string',
        ],
    ]);

    $conflito = Reserva::where(
        'laboratorio_id',
        $dados['laboratorio_id']
    )
        ->where('data', $dados['data'])
        ->where(
            'id',
            '!=',
            $reserva->id
        )
        ->where(function ($query) use ($dados) {
            $query
                ->where(
                    'hora_inicio',
                    '<',
                    $dados['hora_fim']
                )
                ->where(
                    'hora_fim',
                    '>',
                    $dados['hora_inicio']
                );
        })
        ->exists();

    if ($conflito) {
        return response()->json([
            'erro' =>
                'Esse laboratório já possui uma reserva nesse horário.',
        ], 422);
    }

    $reserva->update($dados);

    return response()->json([
        'mensagem' =>
            'Reserva atualizada com sucesso.',

        'reserva' =>
            $reserva->load('laboratorio'),
    ]);
});


/*
|--------------------------------------------------------------------------
| EXCLUIR RESERVA
|--------------------------------------------------------------------------
*/

Route::delete('/reservas/{reserva}', function (
    Reserva $reserva
) {

    $reserva->delete();

    return response()->json([
        'mensagem' =>
            'Reserva excluída com sucesso.',
    ]);
});