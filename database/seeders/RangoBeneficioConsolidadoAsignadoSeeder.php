<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RangoBeneficioConsolidadoAsignadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'IdRangoBeneficioConsolidadoAsignado' => 1,
                'RangoBeneficioConsolidadoAsignado' => '0 - 1.500.000',
            ],
            [
                'IdRangoBeneficioConsolidadoAsignado' => 2,
                'RangoBeneficioConsolidadoAsignado' => '1.500.001 - 3.000.000',
            ],
            [
                'IdRangoBeneficioConsolidadoAsignado' => 3,
                'RangoBeneficioConsolidadoAsignado' => '3.000.001 - 4.500.000',
            ],
            [
                'IdRangoBeneficioConsolidadoAsignado' => 4,
                'RangoBeneficioConsolidadoAsignado' => '4.500.001 - 6.000.000',
            ],
            [
                'IdRangoBeneficioConsolidadoAsignado' => 5,
                'RangoBeneficioConsolidadoAsignado' => '> 6.000.001',
            ],
        ];
        DB::table('rangobeneficioconsolidadoasignado')->insert($data);
    }
}
