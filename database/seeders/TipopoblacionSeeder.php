<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TipopoblacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'IdTipoPoblacion' => 1,
                'TipoPoblacion' => 'DESPLAZADOS',
            ],
            [
                'IdTipoPoblacion' => 2,
                'TipoPoblacion' => 'INDIGENAS',
            ],
            [
                'IdTipoPoblacion' => 3,
                'TipoPoblacion' => 'ND',
            ],
            [
                'IdTipoPoblacion' => 4,
                'TipoPoblacion' => 'SISBEN',
            ],
            [
                'IdTipoPoblacion' => 5,
                'TipoPoblacion' => 'TRANSICION',
            ],
            [
                'IdTipoPoblacion' => 6,
                'TipoPoblacion' => 'UNIDOS',
            ],
        ];
        DB::table('tipopoblacion')->insert($data);
    }
}
