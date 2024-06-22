<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'IdEtnia' => 1,
                'Etnia' => 'AFROCOLOMBIANO',
            ],
            [
                'IdEtnia' => 2,
                'Etnia' => 'AFROCOLOMBIANO - NEGRO',
            ],
            [
                'IdEtnia' => 3,
                'Etnia' => 'INDIGENA',
            ],
            [
                'IdEtnia' => 4,
                'Etnia' => 'MESTIZO',
            ],
            [
                'IdEtnia' => 5,
                'Etnia' => 'ND',
            ],
            [
                'IdEtnia' => 6,
                'Etnia' => 'PALENQUERO',
            ],
            [
                'IdEtnia' => 7,
                'Etnia' => 'RAIZAL',
            ],
            [
                'IdEtnia' => 8,
                'Etnia' => 'ROM',
            ],
            [
                'IdEtnia' => 9,
                'Etnia' => 'ROM O GITANO',
            ],
        ];
        DB::table('etnia')->insert($data);
    }
}
