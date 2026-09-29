<?php

namespace Database\Seeders;

use App\Models\Laboratorio;
use Illuminate\Database\Seeder;

class LaboratorioSeeder extends Seeder
{
    public function run(): void
    {
        Laboratorio::create([
            'nome' => 'Laboratório I',
            'localizacao' => 'Prédio Principal - Sala 69',
            'capacidade' => null,
            'descricao' => 'Laboratório disponível para reserva no prédio principal.',
        ]);

        Laboratorio::create([
            'nome' => 'Laboratório II',
            'localizacao' => 'Prédio Principal - Sala 73',
            'capacidade' => null,
            'descricao' => 'Laboratório disponível para reserva no prédio principal.',
        ]);

        Laboratorio::create([
            'nome' => 'Laboratório III',
            'localizacao' => 'Prédio Principal - Sala 84',
            'capacidade' => null,
            'descricao' => 'Laboratório disponível para reserva no prédio principal.',
        ]);
    }
}