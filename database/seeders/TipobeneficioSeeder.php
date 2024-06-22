<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipobeneficioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'IdTipoBeneficio' => 1,
                'TipoBeneficio' => 'EDUCACION PRIMARIA',
            ],
            [
                'IdTipoBeneficio' => 2,
                'TipoBeneficio' => 'EDUCACION PRIMARIANUTRICION',
            ],
            [
                'IdTipoBeneficio' => 3,
                'TipoBeneficio' => 'EDUCACION PRIMARIANUTRICION MENOR',
            ],
            [
                'IdTipoBeneficio' => 4,
                'TipoBeneficio' => 'EDUCACION SECUNDARIA',
            ],
            [
                'IdTipoBeneficio' => 5,
                'TipoBeneficio' => 'EDUCACION SECUNDARIANUTRICION',
            ],
            [
                'IdTipoBeneficio' => 6,
                'TipoBeneficio' => 'ND',
            ],
            [
                'IdTipoBeneficio' => 7,
                'TipoBeneficio' => 'NUTRICION',
            ],
            [
                'IdTipoBeneficio' => 8,
                'TipoBeneficio' => 'NUTRICION MENOR',
            ],
            [
                'IdTipoBeneficio' => 9,
                'TipoBeneficio' => 'TRANSICION',
            ],
            [
                'IdTipoBeneficio' => 10,
                'TipoBeneficio' => 'TRANSICIONNUTRICION MENOR',
            ],
        ];

        DB::table('tipobeneficio')->insert($data);
    }
}
