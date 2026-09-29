<?php

use App\Models\Laboratorio;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/laboratorios', function () {
    $laboratorios = Laboratorio::all();

    return view('laboratorios', compact('laboratorios'));
})->name('laboratorios');

Route::get('/reservas', function () {
    $reservas = Reserva::with('laboratorio')
        ->orderBy('data')
        ->orderBy('hora_inicio')
        ->get();

    return view('reservas', compact('reservas'));
})->name('reservas');

Route::get('/reservas/nova', function (Request $request) {
    $laboratorios = Laboratorio::all();

    $laboratorioSelecionado = $request->query('laboratorio');

    return view(
        'nova-reserva',
        compact('laboratorios', 'laboratorioSelecionado')
    );
})->name('reservas.nova');

Route::post('/reservas', function (Request $request) {
    $dados = $request->validate([
        'laboratorio_id' => ['required', 'exists:laboratorios,id'],
        'responsavel' => ['required', 'string', 'max:255'],
        'data' => ['required', 'date'],
        'hora_inicio' => ['required'],
        'hora_fim' => ['required', 'after:hora_inicio'],
        'finalidade' => ['nullable', 'string'],
    ]);

    $conflito = Reserva::where(
        'laboratorio_id',
        $dados['laboratorio_id']
    )
        ->where('data', $dados['data'])
        ->where(function ($query) use ($dados) {
            $query->where(
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
        return back()
            ->withInput()
            ->withErrors([
                'horario' =>
                    'Esse laboratório já possui uma reserva nesse horário.',
            ]);
    }

    Reserva::create($dados);

    return redirect()
        ->route('reservas')
        ->with(
            'sucesso',
            'Reserva realizada com sucesso!'
        );
})->name('reservas.store');

Route::get(
    '/reservas/{reserva}/editar',
    function (Reserva $reserva) {
        $laboratorios = Laboratorio::all();

        return view(
            'editar-reserva',
            compact('reserva', 'laboratorios')
        );
    }
)->name('reservas.editar');

Route::put(
    '/reservas/{reserva}',
    function (Request $request, Reserva $reserva) {
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
            ->where('id', '!=', $reserva->id)
            ->where(function ($query) use ($dados) {
                $query->where(
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
            return back()
                ->withInput()
                ->withErrors([
                    'horario' =>
                        'Esse laboratório já possui uma reserva nesse horário.',
                ]);
        }

        $reserva->update($dados);

        return redirect()
            ->route('reservas')
            ->with(
                'sucesso',
                'Reserva atualizada com sucesso!'
            );
    }
)->name('reservas.atualizar');

Route::delete(
    '/reservas/{reserva}',
    function (Reserva $reserva) {
        $reserva->delete();

        return redirect()
            ->route('reservas')
            ->with(
                'sucesso',
                'Reserva excluída com sucesso!'
            );
    }
)->name('reservas.excluir');