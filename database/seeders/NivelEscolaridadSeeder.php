<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NivelEscolaridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'IdNivelEscolaridad' => 1,
                'NivelEscolaridad' => 'POSGRADO',
            ],
            [
                'IdNivelEscolaridad' => 2,
                'NivelEscolaridad' => 'PREGRADO',
            ],
            [
                'IdNivelEscolaridad' => 3,
                'NivelEscolaridad' => 'PRIMARIA',
            ],
            [
                'IdNivelEscolaridad' => 4,
                'NivelEscolaridad' => 'SECUNDARIA',
            ],
            [
                'IdNivelEscolaridad' => 5,
                'NivelEscolaridad' => 'SIN ESPECIFICAR',
            ],
            [
                'IdNivelEscolaridad' => 6,
                'NivelEscolaridad' => 'TECNICO',
            ],
            [
                'IdNivelEscolaridad' => 7,
                'NivelEscolaridad' => 'TECNOLOGO',
            ],
            [
                'IdNivelEscolaridad' => 8,
                'NivelEscolaridad' => 'TRANSICION',
            ],
            [
                'IdNivelEscolaridad' => 9,
                'NivelEscolaridad' => 'ND',
            ],
        ];
        DB::table('nivelescolaridad')->insert($data);
    }
}
