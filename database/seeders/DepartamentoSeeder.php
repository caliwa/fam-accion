<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'CodigoDepartamentoAtencion' => 5 ,
                'NombreDepartamentoAtencion' => 'ANTIOQUIA',
            ],
            [
                'CodigoDepartamentoAtencion' => 8 ,
                'NombreDepartamentoAtencion' => 'ATLANTICO',
            ],
            [
                'CodigoDepartamentoAtencion' => 11 ,
                'NombreDepartamentoAtencion' => 'BOGOTA',
            ],
            [
                'CodigoDepartamentoAtencion' => 13 ,
                'NombreDepartamentoAtencion' => 'BOLIVAR',
            ],
            [
                'CodigoDepartamentoAtencion' => 15 ,
                'NombreDepartamentoAtencion' => 'BOYACA',
            ],
            [
                'CodigoDepartamentoAtencion' => 17 ,
                'NombreDepartamentoAtencion' => 'CALDAS',
            ],
            [
                'CodigoDepartamentoAtencion' => 18 ,
                'NombreDepartamentoAtencion' => 'CAQUETA',
            ],
            [
                'CodigoDepartamentoAtencion' => 19 ,
                'NombreDepartamentoAtencion' => 'CAUCA',
            ],
            [
                'CodigoDepartamentoAtencion' => 20 ,
                'NombreDepartamentoAtencion' => 'CESAR',
            ],
            [
                'CodigoDepartamentoAtencion' => 23 ,
                'NombreDepartamentoAtencion' => 'CORDOBA',
            ],
            [
                'CodigoDepartamentoAtencion' => 25 ,
                'NombreDepartamentoAtencion' => 'CUNDINAMARCA',
            ],
            [
                'CodigoDepartamentoAtencion' => 27 ,
                'NombreDepartamentoAtencion' => 'CHOCO',
            ],
            [
                'CodigoDepartamentoAtencion' => 41 ,
                'NombreDepartamentoAtencion' => 'HUILA',
            ],
            [
                'CodigoDepartamentoAtencion' => 44 ,
                'NombreDepartamentoAtencion' => 'LA GUAJIRA',
            ],
            [
                'CodigoDepartamentoAtencion' => 47 ,
                'NombreDepartamentoAtencion' => 'MAGDALENA',
            ],
            [
                'CodigoDepartamentoAtencion' => 50 ,
                'NombreDepartamentoAtencion' => 'META',
            ],
            [
                'CodigoDepartamentoAtencion' => 52 ,
                'NombreDepartamentoAtencion' => 'NARINO',
            ],
            [
                'CodigoDepartamentoAtencion' => 54 ,
                'NombreDepartamentoAtencion' => 'NORTE DE SANTANDER',
            ],
            [
                'CodigoDepartamentoAtencion' => 63 ,
                'NombreDepartamentoAtencion' => 'QUINDIO',
            ],
            [
                'CodigoDepartamentoAtencion' => 66 ,
                'NombreDepartamentoAtencion' => 'RISARALDA',
            ],
            [
                'CodigoDepartamentoAtencion' => 68 ,
                'NombreDepartamentoAtencion' => 'SANTANDER',
            ],
            [
                'CodigoDepartamentoAtencion' => 70 ,
                'NombreDepartamentoAtencion' => 'SUCRE',
            ],
            [
                'CodigoDepartamentoAtencion' => 73 ,
                'NombreDepartamentoAtencion' => 'TOLIMA',
            ],
            [
                'CodigoDepartamentoAtencion' => 76 ,
                'NombreDepartamentoAtencion' => 'VALLE',
            ],
            [
                'CodigoDepartamentoAtencion' => 81 ,
                'NombreDepartamentoAtencion' => 'ARAUCA',
            ],
            [
                'CodigoDepartamentoAtencion' => 85 ,
                'NombreDepartamentoAtencion' => 'CASANARE',
            ],
            [
                'CodigoDepartamentoAtencion' => 86 ,
                'NombreDepartamentoAtencion' => 'PUTUMAYO',
            ],
            [
                'CodigoDepartamentoAtencion' => 88 ,
                'NombreDepartamentoAtencion' => 'SAN ANDRES',
            ],
            [
                'CodigoDepartamentoAtencion' => 91 ,
                'NombreDepartamentoAtencion' => 'AMAZONAS',
            ],
            [
                'CodigoDepartamentoAtencion' => 94 ,
                'NombreDepartamentoAtencion' => 'GUAINIA',
            ],
            [
                'CodigoDepartamentoAtencion' => 95 ,
                'NombreDepartamentoAtencion' => 'GUAVIARE',
            ],
            [
                'CodigoDepartamentoAtencion' => 97 ,
                'NombreDepartamentoAtencion' => 'VAUPES',
            ],
            [
                'CodigoDepartamentoAtencion' => 99 ,
                'NombreDepartamentoAtencion' => 'VICHADA',
            ],
        ];
        DB::table('departamento')->insert($data);
    }
}
