<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipodocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
           	
            [
                'IdTipoDocumento' => 1,
                'TipoDocumento' => 'CC',
            ],
            [
                'IdTipoDocumento' => 2,
                'TipoDocumento' => 'CE',
            ],
            [
                'IdTipoDocumento' => 3,
                'TipoDocumento' => 'No Definido',
            ],
            [
                'IdTipoDocumento' => 4,
                'TipoDocumento' => 'PA',
            ],
            [
                'IdTipoDocumento' => 5,
                'TipoDocumento' => 'RC',
            ],
            [
                'IdTipoDocumento' => 6,
                'TipoDocumento' => 'TI',
            ]
        ];
        DB::table('tipodocumento')->insert($data);
    }
}
