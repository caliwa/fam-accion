<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
           	
            [
                'CodigoMunicipioAtencion' => 5001,
                'NombreMunicipioAtencion' => 'MEDELLIN',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5002,
                'NombreMunicipioAtencion' => 'ABEJORRAL',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5004,
                'NombreMunicipioAtencion' => 'ABRIAQUI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5021,
                'NombreMunicipioAtencion' => 'ALEJANDRIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5030,
                'NombreMunicipioAtencion' => 'AMAGA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5031,
                'NombreMunicipioAtencion' => 'AMALFI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5034,
                'NombreMunicipioAtencion' => 'ANDES',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5036,
                'NombreMunicipioAtencion' => 'ANGELOPOLIS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5038,
                'NombreMunicipioAtencion' => 'ANGOSTURA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5040,
                'NombreMunicipioAtencion' => 'ANORI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5042,
                'NombreMunicipioAtencion' => 'SANTAFE DE ANTIOQUIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5044,
                'NombreMunicipioAtencion' => 'ANZA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5045,
                'NombreMunicipioAtencion' => 'APARTADO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5051,
                'NombreMunicipioAtencion' => 'ARBOLETES',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5055,
                'NombreMunicipioAtencion' => 'ARGELIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5059,
                'NombreMunicipioAtencion' => 'ARMENIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5079,
                'NombreMunicipioAtencion' => 'BARBOSA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5086,
                'NombreMunicipioAtencion' => 'BELMIRA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5088,
                'NombreMunicipioAtencion' => 'BELLO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5091,
                'NombreMunicipioAtencion' => 'BETANIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5093,
                'NombreMunicipioAtencion' => 'BETULIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5101,
                'NombreMunicipioAtencion' => 'CIUDAD BOLIVAR',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5107,
                'NombreMunicipioAtencion' => 'BRICENO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5113,
                'NombreMunicipioAtencion' => 'BURITICA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5120,
                'NombreMunicipioAtencion' => 'CACERES',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5125,
                'NombreMunicipioAtencion' => 'CAICEDO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5129,
                'NombreMunicipioAtencion' => 'CALDAS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5134,
                'NombreMunicipioAtencion' => 'CAMPAMENTO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5138,
                'NombreMunicipioAtencion' => 'CANASGORDAS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5142,
                'NombreMunicipioAtencion' => 'CARACOLI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5145,
                'NombreMunicipioAtencion' => 'CARAMANTA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5147,
                'NombreMunicipioAtencion' => 'CAREPA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5148,
                'NombreMunicipioAtencion' => 'EL CARMEN DE VIBORAL',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5150,
                'NombreMunicipioAtencion' => 'CAROLINA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5154,
                'NombreMunicipioAtencion' => 'CAUCASIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5172,
                'NombreMunicipioAtencion' => 'CHIGORODO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5190,
                'NombreMunicipioAtencion' => 'CISNEROS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5197,
                'NombreMunicipioAtencion' => 'COCORNA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5206,
                'NombreMunicipioAtencion' => 'CONCEPCION',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5209,
                'NombreMunicipioAtencion' => 'CONCORDIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5212,
                'NombreMunicipioAtencion' => 'COPACABANA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5234,
                'NombreMunicipioAtencion' => 'DABEIBA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5237,
                'NombreMunicipioAtencion' => 'DONMATIAS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5240,
                'NombreMunicipioAtencion' => 'EBEJICO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5250,
                'NombreMunicipioAtencion' => 'EL BAGRE',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5264,
                'NombreMunicipioAtencion' => 'ENTRERRIOS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5266,
                'NombreMunicipioAtencion' => 'ENVIGADO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5282,
                'NombreMunicipioAtencion' => 'FREDONIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5284,
                'NombreMunicipioAtencion' => 'FRONTINO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5306,
                'NombreMunicipioAtencion' => 'GIRALDO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5308,
                'NombreMunicipioAtencion' => 'GIRARDOTA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5310,
                'NombreMunicipioAtencion' => 'GOMEZ PLATA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5313,
                'NombreMunicipioAtencion' => 'GRANADA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5315,
                'NombreMunicipioAtencion' => 'GUADALUPE',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5318,
                'NombreMunicipioAtencion' => 'GUARNE',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5321,
                'NombreMunicipioAtencion' => 'GUATAPE',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5347,
                'NombreMunicipioAtencion' => 'HELICONIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5353,
                'NombreMunicipioAtencion' => 'HISPANIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5360,
                'NombreMunicipioAtencion' => 'ITAGUI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5361,
                'NombreMunicipioAtencion' => 'ITUANGO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5364,
                'NombreMunicipioAtencion' => 'JARDIN',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5368,
                'NombreMunicipioAtencion' => 'JERICO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5376,
                'NombreMunicipioAtencion' => 'LA CEJA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5380,
                'NombreMunicipioAtencion' => 'LA ESTRELLA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5390,
                'NombreMunicipioAtencion' => 'LA PINTADA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5400,
                'NombreMunicipioAtencion' => 'LA UNION',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5411,
                'NombreMunicipioAtencion' => 'LIBORINA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5425,
                'NombreMunicipioAtencion' => 'MACEO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5440,
                'NombreMunicipioAtencion' => 'MARINILLA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5467,
                'NombreMunicipioAtencion' => 'MONTEBELLO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5475,
                'NombreMunicipioAtencion' => 'MURINDO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5480,
                'NombreMunicipioAtencion' => 'MUTATA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5483,
                'NombreMunicipioAtencion' => 'NARINO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5490,
                'NombreMunicipioAtencion' => 'NECOCLI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5495,
                'NombreMunicipioAtencion' => 'NECHI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5501,
                'NombreMunicipioAtencion' => 'OLAYA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5541,
                'NombreMunicipioAtencion' => 'PENOL',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5543,
                'NombreMunicipioAtencion' => 'PEQUE',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5576,
                'NombreMunicipioAtencion' => 'PUEBLORRICO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5579,
                'NombreMunicipioAtencion' => 'PUERTO BERRIO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5585,
                'NombreMunicipioAtencion' => 'PUERTO NARE',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5591,
                'NombreMunicipioAtencion' => 'PUERTO TRIUNFO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5604,
                'NombreMunicipioAtencion' => 'REMEDIOS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5607,
                'NombreMunicipioAtencion' => 'RETIRO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5615,
                'NombreMunicipioAtencion' => 'RIONEGRO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5628,
                'NombreMunicipioAtencion' => 'SABANALARGA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5631,
                'NombreMunicipioAtencion' => 'SABANETA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5642,
                'NombreMunicipioAtencion' => 'SALGAR',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5647,
                'NombreMunicipioAtencion' => 'SAN ANDRES DE CUERQUIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5649,
                'NombreMunicipioAtencion' => 'SAN CARLOS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5652,
                'NombreMunicipioAtencion' => 'SAN FRANCISCO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5656,
                'NombreMunicipioAtencion' => 'SAN JERONIMO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5658,
                'NombreMunicipioAtencion' => 'SAN JOSE DE LA MONTANA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5659,
                'NombreMunicipioAtencion' => 'SAN JUAN DE URABA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5660,
                'NombreMunicipioAtencion' => 'SAN LUIS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5664,
                'NombreMunicipioAtencion' => 'SAN PEDRO DE LOS MILAGROS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5665,
                'NombreMunicipioAtencion' => 'SAN PEDRO DE URABA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5667,
                'NombreMunicipioAtencion' => 'SAN RAFAEL',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5670,
                'NombreMunicipioAtencion' => 'SAN ROQUE',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5674,
                'NombreMunicipioAtencion' => 'SAN VICENTE',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5679,
                'NombreMunicipioAtencion' => 'SANTA BARBARA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5686,
                'NombreMunicipioAtencion' => 'SANTA ROSA DE OSOS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5690,
                'NombreMunicipioAtencion' => 'SANTO DOMINGO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5697,
                'NombreMunicipioAtencion' => 'EL SANTUARIO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5736,
                'NombreMunicipioAtencion' => 'SEGOVIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5756,
                'NombreMunicipioAtencion' => 'SONSON',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5761,
                'NombreMunicipioAtencion' => 'SOPETRAN',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5789,
                'NombreMunicipioAtencion' => 'TAMESIS',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5790,
                'NombreMunicipioAtencion' => 'TARAZA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5792,
                'NombreMunicipioAtencion' => 'TARSO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5809,
                'NombreMunicipioAtencion' => 'TITIRIBI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5819,
                'NombreMunicipioAtencion' => 'TOLEDO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5837,
                'NombreMunicipioAtencion' => 'TURBO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5842,
                'NombreMunicipioAtencion' => 'URAMITA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5847,
                'NombreMunicipioAtencion' => 'URRAO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5854,
                'NombreMunicipioAtencion' => 'VALDIVIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5856,
                'NombreMunicipioAtencion' => 'VALPARAISO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5858,
                'NombreMunicipioAtencion' => 'VEGACHI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5861,
                'NombreMunicipioAtencion' => 'VENECIA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5873,
                'NombreMunicipioAtencion' => 'VIGIA DEL FUERTE',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5885,
                'NombreMunicipioAtencion' => 'YALI',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5887,
                'NombreMunicipioAtencion' => 'YARUMAL',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5890,
                'NombreMunicipioAtencion' => 'YOLOMBO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5893,
                'NombreMunicipioAtencion' => 'YONDO',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 5895,
                'NombreMunicipioAtencion' => 'ZARAGOZA',
                'CodigoDepartamentoAtencion' => 5,
            ],
            [
                'CodigoMunicipioAtencion' => 8001,
                'NombreMunicipioAtencion' => 'BARRANQUILLA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8078,
                'NombreMunicipioAtencion' => 'BARANOA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8137,
                'NombreMunicipioAtencion' => 'CAMPO DE LA CRUZ',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8141,
                'NombreMunicipioAtencion' => 'CANDELARIA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8296,
                'NombreMunicipioAtencion' => 'GALAPA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8372,
                'NombreMunicipioAtencion' => 'JUAN DE ACOSTA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8421,
                'NombreMunicipioAtencion' => 'LURUACO',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8433,
                'NombreMunicipioAtencion' => 'MALAMBO',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8436,
                'NombreMunicipioAtencion' => 'MANATI',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8520,
                'NombreMunicipioAtencion' => 'PALMAR DE VARELA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8549,
                'NombreMunicipioAtencion' => 'PIOJO',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8558,
                'NombreMunicipioAtencion' => 'POLONUEVO',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8560,
                'NombreMunicipioAtencion' => 'PONEDERA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8573,
                'NombreMunicipioAtencion' => 'PUERTO COLOMBIA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8606,
                'NombreMunicipioAtencion' => 'REPELON',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8634,
                'NombreMunicipioAtencion' => 'SABANAGRANDE',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8638,
                'NombreMunicipioAtencion' => 'SABANALARGA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8675,
                'NombreMunicipioAtencion' => 'SANTA LUCIA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8685,
                'NombreMunicipioAtencion' => 'SANTO TOMAS',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8758,
                'NombreMunicipioAtencion' => 'SOLEDAD',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8770,
                'NombreMunicipioAtencion' => 'SUAN',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8832,
                'NombreMunicipioAtencion' => 'TUBARA',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 8849,
                'NombreMunicipioAtencion' => 'USIACURI',
                'CodigoDepartamentoAtencion' => 8,
            ],
            [
                'CodigoMunicipioAtencion' => 11001,
                'NombreMunicipioAtencion' => 'BOGOTA D.C.',
                'CodigoDepartamentoAtencion' => 11,
            ],
            [
                'CodigoMunicipioAtencion' => 13001,
                'NombreMunicipioAtencion' => 'CARTAGENA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13006,
                'NombreMunicipioAtencion' => 'ACHI',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13030,
                'NombreMunicipioAtencion' => 'ALTOS DEL ROSARIO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13042,
                'NombreMunicipioAtencion' => 'ARENAL',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13052,
                'NombreMunicipioAtencion' => 'ARJONA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13062,
                'NombreMunicipioAtencion' => 'ARROYOHONDO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13074,
                'NombreMunicipioAtencion' => 'BARRANCO DE LOBA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13140,
                'NombreMunicipioAtencion' => 'CALAMAR',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13160,
                'NombreMunicipioAtencion' => 'CANTAGALLO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13188,
                'NombreMunicipioAtencion' => 'CICUCO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13212,
                'NombreMunicipioAtencion' => 'CORDOBA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13222,
                'NombreMunicipioAtencion' => 'CLEMENCIA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13244,
                'NombreMunicipioAtencion' => 'EL CARMEN DE BOLIVAR',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13248,
                'NombreMunicipioAtencion' => 'EL GUAMO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13268,
                'NombreMunicipioAtencion' => 'EL PENON',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13300,
                'NombreMunicipioAtencion' => 'HATILLO DE LOBA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13430,
                'NombreMunicipioAtencion' => 'MAGANGUE',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13433,
                'NombreMunicipioAtencion' => 'MAHATES',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13440,
                'NombreMunicipioAtencion' => 'MARGARITA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13442,
                'NombreMunicipioAtencion' => 'MARIA LA BAJA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13458,
                'NombreMunicipioAtencion' => 'MONTECRISTO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13468,
                'NombreMunicipioAtencion' => 'MOMPOS',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13473,
                'NombreMunicipioAtencion' => 'MORALES',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13490,
                'NombreMunicipioAtencion' => 'NOROSI',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13549,
                'NombreMunicipioAtencion' => 'PINILLOS',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13580,
                'NombreMunicipioAtencion' => 'REGIDOR',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13600,
                'NombreMunicipioAtencion' => 'RIO VIEJO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13620,
                'NombreMunicipioAtencion' => 'SAN CRISTOBAL',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13647,
                'NombreMunicipioAtencion' => 'SAN ESTANISLAO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13650,
                'NombreMunicipioAtencion' => 'SAN FERNANDO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13654,
                'NombreMunicipioAtencion' => 'SAN JACINTO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13655,
                'NombreMunicipioAtencion' => 'SAN JACINTO DEL CAUCA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13657,
                'NombreMunicipioAtencion' => 'SAN JUAN NEPOMUCENO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13667,
                'NombreMunicipioAtencion' => 'SAN MARTIN DE LOBA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13670,
                'NombreMunicipioAtencion' => 'SAN PABLO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13673,
                'NombreMunicipioAtencion' => 'SANTA CATALINA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13683,
                'NombreMunicipioAtencion' => 'SANTA ROSA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13688,
                'NombreMunicipioAtencion' => 'SANTA ROSA DEL SUR',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13744,
                'NombreMunicipioAtencion' => 'SIMITI',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13760,
                'NombreMunicipioAtencion' => 'SOPLAVIENTO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13780,
                'NombreMunicipioAtencion' => 'TALAIGUA NUEVO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13810,
                'NombreMunicipioAtencion' => 'TIQUISIO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13836,
                'NombreMunicipioAtencion' => 'TURBACO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13838,
                'NombreMunicipioAtencion' => 'TURBANA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13873,
                'NombreMunicipioAtencion' => 'VILLANUEVA',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 13894,
                'NombreMunicipioAtencion' => 'ZAMBRANO',
                'CodigoDepartamentoAtencion' => 13,
            ],
            [
                'CodigoMunicipioAtencion' => 15001,
                'NombreMunicipioAtencion' => 'TUNJA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15022,
                'NombreMunicipioAtencion' => 'ALMEIDA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15047,
                'NombreMunicipioAtencion' => 'AQUITANIA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15051,
                'NombreMunicipioAtencion' => 'ARCABUCO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15087,
                'NombreMunicipioAtencion' => 'BELEN',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15090,
                'NombreMunicipioAtencion' => 'BERBEO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15092,
                'NombreMunicipioAtencion' => 'BETEITIVA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15097,
                'NombreMunicipioAtencion' => 'BOAVITA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15104,
                'NombreMunicipioAtencion' => 'BOYACA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15106,
                'NombreMunicipioAtencion' => 'BRICENO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15109,
                'NombreMunicipioAtencion' => 'BUENAVISTA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15114,
                'NombreMunicipioAtencion' => 'BUSBANZA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15131,
                'NombreMunicipioAtencion' => 'CALDAS',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15135,
                'NombreMunicipioAtencion' => 'CAMPOHERMOSO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15162,
                'NombreMunicipioAtencion' => 'CERINZA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15172,
                'NombreMunicipioAtencion' => 'CHINAVITA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15176,
                'NombreMunicipioAtencion' => 'CHIQUINQUIRA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15180,
                'NombreMunicipioAtencion' => 'CHISCAS',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15183,
                'NombreMunicipioAtencion' => 'CHITA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15185,
                'NombreMunicipioAtencion' => 'CHITARAQUE',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15187,
                'NombreMunicipioAtencion' => 'CHIVATA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15189,
                'NombreMunicipioAtencion' => 'CIENEGA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15204,
                'NombreMunicipioAtencion' => 'COMBITA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15212,
                'NombreMunicipioAtencion' => 'COPER',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15215,
                'NombreMunicipioAtencion' => 'CORRALES',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15218,
                'NombreMunicipioAtencion' => 'COVARACHIA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15223,
                'NombreMunicipioAtencion' => 'CUBARA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15224,
                'NombreMunicipioAtencion' => 'CUCAITA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15226,
                'NombreMunicipioAtencion' => 'CUITIVA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15232,
                'NombreMunicipioAtencion' => 'CHIQUIZA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15236,
                'NombreMunicipioAtencion' => 'CHIVOR',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15238,
                'NombreMunicipioAtencion' => 'DUITAMA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15244,
                'NombreMunicipioAtencion' => 'EL COCUY',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15248,
                'NombreMunicipioAtencion' => 'EL ESPINO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15272,
                'NombreMunicipioAtencion' => 'FIRAVITOBA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15276,
                'NombreMunicipioAtencion' => 'FLORESTA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15293,
                'NombreMunicipioAtencion' => 'GACHANTIVA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15296,
                'NombreMunicipioAtencion' => 'GAMEZA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15299,
                'NombreMunicipioAtencion' => 'GARAGOA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15317,
                'NombreMunicipioAtencion' => 'GUACAMAYAS',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15322,
                'NombreMunicipioAtencion' => 'GUATEQUE',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15325,
                'NombreMunicipioAtencion' => 'GUAYATA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15332,
                'NombreMunicipioAtencion' => 'GUICAN',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15362,
                'NombreMunicipioAtencion' => 'IZA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15367,
                'NombreMunicipioAtencion' => 'JENESANO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15368,
                'NombreMunicipioAtencion' => 'JERICO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15377,
                'NombreMunicipioAtencion' => 'LABRANZAGRANDE',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15380,
                'NombreMunicipioAtencion' => 'LA CAPILLA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15401,
                'NombreMunicipioAtencion' => 'LA VICTORIA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15403,
                'NombreMunicipioAtencion' => 'LA UVITA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15407,
                'NombreMunicipioAtencion' => 'VILLA DE LEYVA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15425,
                'NombreMunicipioAtencion' => 'MACANAL',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15442,
                'NombreMunicipioAtencion' => 'MARIPI',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15455,
                'NombreMunicipioAtencion' => 'MIRAFLORES',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15464,
                'NombreMunicipioAtencion' => 'MONGUA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15466,
                'NombreMunicipioAtencion' => 'MONGUI',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15469,
                'NombreMunicipioAtencion' => 'MONIQUIRA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15476,
                'NombreMunicipioAtencion' => 'MOTAVITA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15480,
                'NombreMunicipioAtencion' => 'MUZO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15491,
                'NombreMunicipioAtencion' => 'NOBSA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15494,
                'NombreMunicipioAtencion' => 'NUEVO COLON',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15500,
                'NombreMunicipioAtencion' => 'OICATA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15507,
                'NombreMunicipioAtencion' => 'OTANCHE',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15511,
                'NombreMunicipioAtencion' => 'PACHAVITA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15514,
                'NombreMunicipioAtencion' => 'PAEZ',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15516,
                'NombreMunicipioAtencion' => 'PAIPA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15518,
                'NombreMunicipioAtencion' => 'PAJARITO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15522,
                'NombreMunicipioAtencion' => 'PANQUEBA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15531,
                'NombreMunicipioAtencion' => 'PAUNA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15533,
                'NombreMunicipioAtencion' => 'PAYA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15537,
                'NombreMunicipioAtencion' => 'PAZ DE RIO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15542,
                'NombreMunicipioAtencion' => 'PESCA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15550,
                'NombreMunicipioAtencion' => 'PISBA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15572,
                'NombreMunicipioAtencion' => 'PUERTO BOYACA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15580,
                'NombreMunicipioAtencion' => 'QUIPAMA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15599,
                'NombreMunicipioAtencion' => 'RAMIRIQUI',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15600,
                'NombreMunicipioAtencion' => 'RAQUIRA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15621,
                'NombreMunicipioAtencion' => 'RONDON',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15632,
                'NombreMunicipioAtencion' => 'SABOYA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15638,
                'NombreMunicipioAtencion' => 'SACHICA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15646,
                'NombreMunicipioAtencion' => 'SAMACA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15660,
                'NombreMunicipioAtencion' => 'SAN EDUARDO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15664,
                'NombreMunicipioAtencion' => 'SAN JOSE DE PARE',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15667,
                'NombreMunicipioAtencion' => 'SAN LUIS DE GACENO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15673,
                'NombreMunicipioAtencion' => 'SAN MATEO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15676,
                'NombreMunicipioAtencion' => 'SAN MIGUEL DE SEMA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15681,
                'NombreMunicipioAtencion' => 'SAN PABLO DE BORBUR',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15686,
                'NombreMunicipioAtencion' => 'SANTANA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15690,
                'NombreMunicipioAtencion' => 'SANTA MARIA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15693,
                'NombreMunicipioAtencion' => 'SANTA ROSA DE VITERBO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15696,
                'NombreMunicipioAtencion' => 'SANTA SOFIA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15720,
                'NombreMunicipioAtencion' => 'SATIVANORTE',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15723,
                'NombreMunicipioAtencion' => 'SATIVASUR',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15740,
                'NombreMunicipioAtencion' => 'SIACHOQUE',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15753,
                'NombreMunicipioAtencion' => 'SOATA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15755,
                'NombreMunicipioAtencion' => 'SOCOTA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15757,
                'NombreMunicipioAtencion' => 'SOCHA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15759,
                'NombreMunicipioAtencion' => 'SOGAMOSO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15761,
                'NombreMunicipioAtencion' => 'SOMONDOCO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15762,
                'NombreMunicipioAtencion' => 'SORA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15763,
                'NombreMunicipioAtencion' => 'SOTAQUIRA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15764,
                'NombreMunicipioAtencion' => 'SORACA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15774,
                'NombreMunicipioAtencion' => 'SUSACON',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15776,
                'NombreMunicipioAtencion' => 'SUTAMARCHAN',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15778,
                'NombreMunicipioAtencion' => 'SUTATENZA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15790,
                'NombreMunicipioAtencion' => 'TASCO',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15798,
                'NombreMunicipioAtencion' => 'TENZA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15804,
                'NombreMunicipioAtencion' => 'TIBANA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15806,
                'NombreMunicipioAtencion' => 'TIBASOSA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15808,
                'NombreMunicipioAtencion' => 'TINJACA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15810,
                'NombreMunicipioAtencion' => 'TIPACOQUE',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15814,
                'NombreMunicipioAtencion' => 'TOCA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15816,
                'NombreMunicipioAtencion' => 'TOGUI',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15820,
                'NombreMunicipioAtencion' => 'TOPAGA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15822,
                'NombreMunicipioAtencion' => 'TOTA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15832,
                'NombreMunicipioAtencion' => 'TUNUNGUA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15835,
                'NombreMunicipioAtencion' => 'TURMEQUE',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15837,
                'NombreMunicipioAtencion' => 'TUTA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15839,
                'NombreMunicipioAtencion' => 'TUTAZA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15842,
                'NombreMunicipioAtencion' => 'UMBITA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15861,
                'NombreMunicipioAtencion' => 'VENTAQUEMADA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15879,
                'NombreMunicipioAtencion' => 'VIRACACHA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 15897,
                'NombreMunicipioAtencion' => 'ZETAQUIRA',
                'CodigoDepartamentoAtencion' => 15,
            ],
            [
                'CodigoMunicipioAtencion' => 17001,
                'NombreMunicipioAtencion' => 'MANIZALES',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17013,
                'NombreMunicipioAtencion' => 'AGUADAS',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17042,
                'NombreMunicipioAtencion' => 'ANSERMA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17050,
                'NombreMunicipioAtencion' => 'ARANZAZU',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17088,
                'NombreMunicipioAtencion' => 'BELALCAZAR',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17174,
                'NombreMunicipioAtencion' => 'CHINCHINA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17272,
                'NombreMunicipioAtencion' => 'FILADELFIA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17380,
                'NombreMunicipioAtencion' => 'LA DORADA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17388,
                'NombreMunicipioAtencion' => 'LA MERCED',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17433,
                'NombreMunicipioAtencion' => 'MANZANARES',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17442,
                'NombreMunicipioAtencion' => 'MARMATO',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17444,
                'NombreMunicipioAtencion' => 'MARQUETALIA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17446,
                'NombreMunicipioAtencion' => 'MARULANDA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17486,
                'NombreMunicipioAtencion' => 'NEIRA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17495,
                'NombreMunicipioAtencion' => 'NORCASIA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17513,
                'NombreMunicipioAtencion' => 'PACORA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17524,
                'NombreMunicipioAtencion' => 'PALESTINA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17541,
                'NombreMunicipioAtencion' => 'PENSILVANIA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17614,
                'NombreMunicipioAtencion' => 'RIOSUCIO',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17616,
                'NombreMunicipioAtencion' => 'RISARALDA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17653,
                'NombreMunicipioAtencion' => 'SALAMINA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17662,
                'NombreMunicipioAtencion' => 'SAMANA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17665,
                'NombreMunicipioAtencion' => 'SAN JOSE',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17777,
                'NombreMunicipioAtencion' => 'SUPIA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17867,
                'NombreMunicipioAtencion' => 'VICTORIA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17873,
                'NombreMunicipioAtencion' => 'VILLAMARIA',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 17877,
                'NombreMunicipioAtencion' => 'VITERBO',
                'CodigoDepartamentoAtencion' => 17,
            ],
            [
                'CodigoMunicipioAtencion' => 18001,
                'NombreMunicipioAtencion' => 'FLORENCIA',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18029,
                'NombreMunicipioAtencion' => 'ALBANIA',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18094,
                'NombreMunicipioAtencion' => 'BELEN DE LOS ANDAQUIES',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18150,
                'NombreMunicipioAtencion' => 'CARTAGENA DEL CHAIRA',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18205,
                'NombreMunicipioAtencion' => 'CURILLO',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18247,
                'NombreMunicipioAtencion' => 'EL DONCELLO',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18256,
                'NombreMunicipioAtencion' => 'EL PAUJIL',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18410,
                'NombreMunicipioAtencion' => 'LA MONTANITA',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18460,
                'NombreMunicipioAtencion' => 'MILAN',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18479,
                'NombreMunicipioAtencion' => 'MORELIA',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18592,
                'NombreMunicipioAtencion' => 'PUERTO RICO',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18610,
                'NombreMunicipioAtencion' => 'SAN JOSE DEL FRAGUA',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18753,
                'NombreMunicipioAtencion' => 'SAN VICENTE DEL CAGUAN',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18756,
                'NombreMunicipioAtencion' => 'SOLANO',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18785,
                'NombreMunicipioAtencion' => 'SOLITA',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 18860,
                'NombreMunicipioAtencion' => 'VALPARAISO',
                'CodigoDepartamentoAtencion' => 18,
            ],
            [
                'CodigoMunicipioAtencion' => 19001,
                'NombreMunicipioAtencion' => 'POPAYAN',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19022,
                'NombreMunicipioAtencion' => 'ALMAGUER',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19050,
                'NombreMunicipioAtencion' => 'ARGELIA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19075,
                'NombreMunicipioAtencion' => 'BALBOA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19100,
                'NombreMunicipioAtencion' => 'BOLIVAR',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19110,
                'NombreMunicipioAtencion' => 'BUENOS AIRES',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19130,
                'NombreMunicipioAtencion' => 'CAJIBIO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19137,
                'NombreMunicipioAtencion' => 'CALDONO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19142,
                'NombreMunicipioAtencion' => 'CALOTO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19212,
                'NombreMunicipioAtencion' => 'CORINTO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19256,
                'NombreMunicipioAtencion' => 'EL TAMBO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19290,
                'NombreMunicipioAtencion' => 'FLORENCIA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19300,
                'NombreMunicipioAtencion' => 'GUACHENE',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19318,
                'NombreMunicipioAtencion' => 'GUAPI',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19355,
                'NombreMunicipioAtencion' => 'INZA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19364,
                'NombreMunicipioAtencion' => 'JAMBALO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19392,
                'NombreMunicipioAtencion' => 'LA SIERRA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19397,
                'NombreMunicipioAtencion' => 'LA VEGA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19418,
                'NombreMunicipioAtencion' => 'LOPEZ',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19450,
                'NombreMunicipioAtencion' => 'MERCADERES',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19455,
                'NombreMunicipioAtencion' => 'MIRANDA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19473,
                'NombreMunicipioAtencion' => 'MORALES',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19513,
                'NombreMunicipioAtencion' => 'PADILLA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19517,
                'NombreMunicipioAtencion' => 'PAEZ',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19532,
                'NombreMunicipioAtencion' => 'PATIA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19533,
                'NombreMunicipioAtencion' => 'PIAMONTE',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19548,
                'NombreMunicipioAtencion' => 'PIENDAMO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19573,
                'NombreMunicipioAtencion' => 'PUERTO TEJADA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19585,
                'NombreMunicipioAtencion' => 'PURACE',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19622,
                'NombreMunicipioAtencion' => 'ROSAS',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19693,
                'NombreMunicipioAtencion' => 'SAN SEBASTIAN',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19698,
                'NombreMunicipioAtencion' => 'SANTANDER DE QUILICHAO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19701,
                'NombreMunicipioAtencion' => 'SANTA ROSA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19743,
                'NombreMunicipioAtencion' => 'SILVIA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19760,
                'NombreMunicipioAtencion' => 'SOTARA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19780,
                'NombreMunicipioAtencion' => 'SUAREZ',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19785,
                'NombreMunicipioAtencion' => 'SUCRE',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19807,
                'NombreMunicipioAtencion' => 'TIMBIO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19809,
                'NombreMunicipioAtencion' => 'TIMBIQUI',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19821,
                'NombreMunicipioAtencion' => 'TORIBIO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19824,
                'NombreMunicipioAtencion' => 'TOTORO',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 19845,
                'NombreMunicipioAtencion' => 'VILLA RICA',
                'CodigoDepartamentoAtencion' => 19,
            ],
            [
                'CodigoMunicipioAtencion' => 20001,
                'NombreMunicipioAtencion' => 'VALLEDUPAR',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20011,
                'NombreMunicipioAtencion' => 'AGUACHICA',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20013,
                'NombreMunicipioAtencion' => 'AGUSTIN CODAZZI',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20032,
                'NombreMunicipioAtencion' => 'ASTREA',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20045,
                'NombreMunicipioAtencion' => 'BECERRIL',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20060,
                'NombreMunicipioAtencion' => 'BOSCONIA',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20175,
                'NombreMunicipioAtencion' => 'CHIMICHAGUA',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20178,
                'NombreMunicipioAtencion' => 'CHIRIGUANA',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20228,
                'NombreMunicipioAtencion' => 'CURUMANI',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20238,
                'NombreMunicipioAtencion' => 'EL COPEY',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20250,
                'NombreMunicipioAtencion' => 'EL PASO',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20295,
                'NombreMunicipioAtencion' => 'GAMARRA',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20310,
                'NombreMunicipioAtencion' => 'GONZALEZ',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20383,
                'NombreMunicipioAtencion' => 'LA GLORIA',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20400,
                'NombreMunicipioAtencion' => 'LA JAGUA DE IBIRICO',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20443,
                'NombreMunicipioAtencion' => 'MANAURE',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20517,
                'NombreMunicipioAtencion' => 'PAILITAS',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20550,
                'NombreMunicipioAtencion' => 'PELAYA',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20570,
                'NombreMunicipioAtencion' => 'PUEBLO BELLO',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20614,
                'NombreMunicipioAtencion' => 'RIO DE ORO',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20621,
                'NombreMunicipioAtencion' => 'LA PAZ',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20710,
                'NombreMunicipioAtencion' => 'SAN ALBERTO',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20750,
                'NombreMunicipioAtencion' => 'SAN DIEGO',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20770,
                'NombreMunicipioAtencion' => 'SAN MARTIN',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 20787,
                'NombreMunicipioAtencion' => 'TAMALAMEQUE',
                'CodigoDepartamentoAtencion' => 20,
            ],
            [
                'CodigoMunicipioAtencion' => 23001,
                'NombreMunicipioAtencion' => 'MONTERIA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23068,
                'NombreMunicipioAtencion' => 'AYAPEL',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23079,
                'NombreMunicipioAtencion' => 'BUENAVISTA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23090,
                'NombreMunicipioAtencion' => 'CANALETE',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23162,
                'NombreMunicipioAtencion' => 'CERETE',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23168,
                'NombreMunicipioAtencion' => 'CHIMA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23182,
                'NombreMunicipioAtencion' => 'CHINU',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23189,
                'NombreMunicipioAtencion' => 'CIENAGA DE ORO',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23300,
                'NombreMunicipioAtencion' => 'COTORRA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23350,
                'NombreMunicipioAtencion' => 'LA APARTADA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23417,
                'NombreMunicipioAtencion' => 'LORICA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23419,
                'NombreMunicipioAtencion' => 'LOS CORDOBAS',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23464,
                'NombreMunicipioAtencion' => 'MOMIL',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23466,
                'NombreMunicipioAtencion' => 'MONTELIBANO',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23500,
                'NombreMunicipioAtencion' => 'MONITOS',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23555,
                'NombreMunicipioAtencion' => 'PLANETA RICA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23570,
                'NombreMunicipioAtencion' => 'PUEBLO NUEVO',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23574,
                'NombreMunicipioAtencion' => 'PUERTO ESCONDIDO',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23580,
                'NombreMunicipioAtencion' => 'PUERTO LIBERTADOR',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23586,
                'NombreMunicipioAtencion' => 'PURISIMA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23660,
                'NombreMunicipioAtencion' => 'SAHAGUN',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23670,
                'NombreMunicipioAtencion' => 'SAN ANDRES SOTAVENTO',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23672,
                'NombreMunicipioAtencion' => 'SAN ANTERO',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23675,
                'NombreMunicipioAtencion' => 'SAN BERNARDO DEL VIENTO',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23678,
                'NombreMunicipioAtencion' => 'SAN CARLOS',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23682,
                'NombreMunicipioAtencion' => 'SAN JOSE DE URE',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23686,
                'NombreMunicipioAtencion' => 'SAN PELAYO',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23807,
                'NombreMunicipioAtencion' => 'TIERRALTA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23815,
                'NombreMunicipioAtencion' => 'TUCHIN',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 23855,
                'NombreMunicipioAtencion' => 'VALENCIA',
                'CodigoDepartamentoAtencion' => 23,
            ],
            [
                'CodigoMunicipioAtencion' => 25001,
                'NombreMunicipioAtencion' => 'AGUA DE DIOS',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25019,
                'NombreMunicipioAtencion' => 'ALBAN',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25035,
                'NombreMunicipioAtencion' => 'ANAPOIMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25040,
                'NombreMunicipioAtencion' => 'ANOLAIMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25053,
                'NombreMunicipioAtencion' => 'ARBELAEZ',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25086,
                'NombreMunicipioAtencion' => 'BELTRAN',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25095,
                'NombreMunicipioAtencion' => 'BITUIMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25099,
                'NombreMunicipioAtencion' => 'BOJACA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25120,
                'NombreMunicipioAtencion' => 'CABRERA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25123,
                'NombreMunicipioAtencion' => 'CACHIPAY',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25126,
                'NombreMunicipioAtencion' => 'CAJICA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25148,
                'NombreMunicipioAtencion' => 'CAPARRAPI',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25151,
                'NombreMunicipioAtencion' => 'CAQUEZA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25154,
                'NombreMunicipioAtencion' => 'CARMEN DE CARUPA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25168,
                'NombreMunicipioAtencion' => 'CHAGUANI',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25175,
                'NombreMunicipioAtencion' => 'CHIA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25178,
                'NombreMunicipioAtencion' => 'CHIPAQUE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25181,
                'NombreMunicipioAtencion' => 'CHOACHI',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25183,
                'NombreMunicipioAtencion' => 'CHOCONTA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25200,
                'NombreMunicipioAtencion' => 'COGUA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25214,
                'NombreMunicipioAtencion' => 'COTA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25224,
                'NombreMunicipioAtencion' => 'CUCUNUBA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25245,
                'NombreMunicipioAtencion' => 'EL COLEGIO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25258,
                'NombreMunicipioAtencion' => 'EL PENON',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25260,
                'NombreMunicipioAtencion' => 'EL ROSAL',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25269,
                'NombreMunicipioAtencion' => 'FACATATIVA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25279,
                'NombreMunicipioAtencion' => 'FOMEQUE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25281,
                'NombreMunicipioAtencion' => 'FOSCA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25286,
                'NombreMunicipioAtencion' => 'FUNZA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25288,
                'NombreMunicipioAtencion' => 'FUQUENE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25290,
                'NombreMunicipioAtencion' => 'FUSAGASUGA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25293,
                'NombreMunicipioAtencion' => 'GACHALA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25295,
                'NombreMunicipioAtencion' => 'GACHANCIPA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25297,
                'NombreMunicipioAtencion' => 'GACHETA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25299,
                'NombreMunicipioAtencion' => 'GAMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25307,
                'NombreMunicipioAtencion' => 'GIRARDOT',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25312,
                'NombreMunicipioAtencion' => 'GRANADA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25317,
                'NombreMunicipioAtencion' => 'GUACHETA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25320,
                'NombreMunicipioAtencion' => 'GUADUAS',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25322,
                'NombreMunicipioAtencion' => 'GUASCA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25324,
                'NombreMunicipioAtencion' => 'GUATAQUI',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25326,
                'NombreMunicipioAtencion' => 'GUATAVITA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25328,
                'NombreMunicipioAtencion' => 'GUAYABAL DE SIQUIMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25335,
                'NombreMunicipioAtencion' => 'GUAYABETAL',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25339,
                'NombreMunicipioAtencion' => 'GUTIERREZ',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25368,
                'NombreMunicipioAtencion' => 'JERUSALEN',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25372,
                'NombreMunicipioAtencion' => 'JUNIN',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25377,
                'NombreMunicipioAtencion' => 'LA CALERA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25386,
                'NombreMunicipioAtencion' => 'LA MESA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25394,
                'NombreMunicipioAtencion' => 'LA PALMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25398,
                'NombreMunicipioAtencion' => 'LA PENA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25402,
                'NombreMunicipioAtencion' => 'LA VEGA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25407,
                'NombreMunicipioAtencion' => 'LENGUAZAQUE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25426,
                'NombreMunicipioAtencion' => 'MACHETA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25430,
                'NombreMunicipioAtencion' => 'MADRID',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25436,
                'NombreMunicipioAtencion' => 'MANTA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25438,
                'NombreMunicipioAtencion' => 'MEDINA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25473,
                'NombreMunicipioAtencion' => 'MOSQUERA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25483,
                'NombreMunicipioAtencion' => 'NARINO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25486,
                'NombreMunicipioAtencion' => 'NEMOCON',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25488,
                'NombreMunicipioAtencion' => 'NILO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25489,
                'NombreMunicipioAtencion' => 'NIMAIMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25491,
                'NombreMunicipioAtencion' => 'NOCAIMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25506,
                'NombreMunicipioAtencion' => 'VENECIA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25513,
                'NombreMunicipioAtencion' => 'PACHO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25518,
                'NombreMunicipioAtencion' => 'PAIME',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25524,
                'NombreMunicipioAtencion' => 'PANDI',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25530,
                'NombreMunicipioAtencion' => 'PARATEBUENO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25535,
                'NombreMunicipioAtencion' => 'PASCA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25572,
                'NombreMunicipioAtencion' => 'PUERTO SALGAR',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25580,
                'NombreMunicipioAtencion' => 'PULI',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25592,
                'NombreMunicipioAtencion' => 'QUEBRADANEGRA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25594,
                'NombreMunicipioAtencion' => 'QUETAME',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25596,
                'NombreMunicipioAtencion' => 'QUIPILE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25599,
                'NombreMunicipioAtencion' => 'APULO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25612,
                'NombreMunicipioAtencion' => 'RICAURTE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25645,
                'NombreMunicipioAtencion' => 'SAN ANTONIO DEL TEQUENDAMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25649,
                'NombreMunicipioAtencion' => 'SAN BERNARDO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25653,
                'NombreMunicipioAtencion' => 'SAN CAYETANO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25658,
                'NombreMunicipioAtencion' => 'SAN FRANCISCO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25662,
                'NombreMunicipioAtencion' => 'SAN JUAN DE RIO SECO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25718,
                'NombreMunicipioAtencion' => 'SASAIMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25736,
                'NombreMunicipioAtencion' => 'SESQUILE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25740,
                'NombreMunicipioAtencion' => 'SIBATE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25743,
                'NombreMunicipioAtencion' => 'SILVANIA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25745,
                'NombreMunicipioAtencion' => 'SIMIJACA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25754,
                'NombreMunicipioAtencion' => 'SOACHA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25758,
                'NombreMunicipioAtencion' => 'SOPO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25769,
                'NombreMunicipioAtencion' => 'SUBACHOQUE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25772,
                'NombreMunicipioAtencion' => 'SUESCA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25777,
                'NombreMunicipioAtencion' => 'SUPATA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25779,
                'NombreMunicipioAtencion' => 'SUSA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25781,
                'NombreMunicipioAtencion' => 'SUTATAUSA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25785,
                'NombreMunicipioAtencion' => 'TABIO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25793,
                'NombreMunicipioAtencion' => 'TAUSA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25797,
                'NombreMunicipioAtencion' => 'TENA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25799,
                'NombreMunicipioAtencion' => 'TENJO',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25805,
                'NombreMunicipioAtencion' => 'TIBACUY',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25807,
                'NombreMunicipioAtencion' => 'TIBIRITA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25815,
                'NombreMunicipioAtencion' => 'TOCAIMA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25817,
                'NombreMunicipioAtencion' => 'TOCANCIPA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25823,
                'NombreMunicipioAtencion' => 'TOPAIPI',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25839,
                'NombreMunicipioAtencion' => 'UBALA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25841,
                'NombreMunicipioAtencion' => 'UBAQUE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25843,
                'NombreMunicipioAtencion' => 'VILLA DE SAN DIEGO DE UBATE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25845,
                'NombreMunicipioAtencion' => 'UNE',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25851,
                'NombreMunicipioAtencion' => 'UTICA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25862,
                'NombreMunicipioAtencion' => 'VERGARA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25867,
                'NombreMunicipioAtencion' => 'VIANI',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25871,
                'NombreMunicipioAtencion' => 'VILLAGOMEZ',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25873,
                'NombreMunicipioAtencion' => 'VILLAPINZON',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25875,
                'NombreMunicipioAtencion' => 'VILLETA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25878,
                'NombreMunicipioAtencion' => 'VIOTA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25885,
                'NombreMunicipioAtencion' => 'YACOPI',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25898,
                'NombreMunicipioAtencion' => 'ZIPACON',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 25899,
                'NombreMunicipioAtencion' => 'ZIPAQUIRA',
                'CodigoDepartamentoAtencion' => 25,
            ],
            [
                'CodigoMunicipioAtencion' => 27001,
                'NombreMunicipioAtencion' => 'QUIBDO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27006,
                'NombreMunicipioAtencion' => 'ACANDI',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27025,
                'NombreMunicipioAtencion' => 'ALTO BAUDO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27050,
                'NombreMunicipioAtencion' => 'ATRATO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27073,
                'NombreMunicipioAtencion' => 'BAGADO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27075,
                'NombreMunicipioAtencion' => 'BAHIA SOLANO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27077,
                'NombreMunicipioAtencion' => 'BAJO BAUDO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27086,
                'NombreMunicipioAtencion' => 'BELEN DE BAJIRA',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27099,
                'NombreMunicipioAtencion' => 'BOJAYA',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27135,
                'NombreMunicipioAtencion' => 'EL CANTON DEL SAN PABLO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27150,
                'NombreMunicipioAtencion' => 'CARMEN DEL DARIEN',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27160,
                'NombreMunicipioAtencion' => 'CERTEGUI',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27205,
                'NombreMunicipioAtencion' => 'CONDOTO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27245,
                'NombreMunicipioAtencion' => 'EL CARMEN DE ATRATO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27250,
                'NombreMunicipioAtencion' => 'EL LITORAL DEL SAN JUAN',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27361,
                'NombreMunicipioAtencion' => 'ISTMINA',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27372,
                'NombreMunicipioAtencion' => 'JURADO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27413,
                'NombreMunicipioAtencion' => 'LLORO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27425,
                'NombreMunicipioAtencion' => 'MEDIO ATRATO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27430,
                'NombreMunicipioAtencion' => 'MEDIO BAUDO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27450,
                'NombreMunicipioAtencion' => 'MEDIO SAN JUAN',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27491,
                'NombreMunicipioAtencion' => 'NOVITA',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27495,
                'NombreMunicipioAtencion' => 'NUQUI',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27580,
                'NombreMunicipioAtencion' => 'RIO IRO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27600,
                'NombreMunicipioAtencion' => 'RIO QUITO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27615,
                'NombreMunicipioAtencion' => 'RIOSUCIO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27660,
                'NombreMunicipioAtencion' => 'SAN JOSE DEL PALMAR',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27745,
                'NombreMunicipioAtencion' => 'SIPI',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27787,
                'NombreMunicipioAtencion' => 'TADO',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27800,
                'NombreMunicipioAtencion' => 'UNGUIA',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 27810,
                'NombreMunicipioAtencion' => 'UNION PANAMERICANA',
                'CodigoDepartamentoAtencion' => 27,
            ],
            [
                'CodigoMunicipioAtencion' => 41001,
                'NombreMunicipioAtencion' => 'NEIVA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41006,
                'NombreMunicipioAtencion' => 'ACEVEDO',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41013,
                'NombreMunicipioAtencion' => 'AGRADO',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41016,
                'NombreMunicipioAtencion' => 'AIPE',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41020,
                'NombreMunicipioAtencion' => 'ALGECIRAS',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41026,
                'NombreMunicipioAtencion' => 'ALTAMIRA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41078,
                'NombreMunicipioAtencion' => 'BARAYA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41132,
                'NombreMunicipioAtencion' => 'CAMPOALEGRE',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41206,
                'NombreMunicipioAtencion' => 'COLOMBIA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41244,
                'NombreMunicipioAtencion' => 'ELIAS',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41298,
                'NombreMunicipioAtencion' => 'GARZON',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41306,
                'NombreMunicipioAtencion' => 'GIGANTE',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41319,
                'NombreMunicipioAtencion' => 'GUADALUPE',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41349,
                'NombreMunicipioAtencion' => 'HOBO',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41357,
                'NombreMunicipioAtencion' => 'IQUIRA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41359,
                'NombreMunicipioAtencion' => 'ISNOS',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41378,
                'NombreMunicipioAtencion' => 'LA ARGENTINA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41396,
                'NombreMunicipioAtencion' => 'LA PLATA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41483,
                'NombreMunicipioAtencion' => 'NATAGA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41503,
                'NombreMunicipioAtencion' => 'OPORAPA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41518,
                'NombreMunicipioAtencion' => 'PAICOL',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41524,
                'NombreMunicipioAtencion' => 'PALERMO',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41530,
                'NombreMunicipioAtencion' => 'PALESTINA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41548,
                'NombreMunicipioAtencion' => 'PITAL',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41551,
                'NombreMunicipioAtencion' => 'PITALITO',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41615,
                'NombreMunicipioAtencion' => 'RIVERA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41660,
                'NombreMunicipioAtencion' => 'SALADOBLANCO',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41668,
                'NombreMunicipioAtencion' => 'SAN AGUSTIN',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41676,
                'NombreMunicipioAtencion' => 'SANTA MARIA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41770,
                'NombreMunicipioAtencion' => 'SUAZA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41791,
                'NombreMunicipioAtencion' => 'TARQUI',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41797,
                'NombreMunicipioAtencion' => 'TESALIA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41799,
                'NombreMunicipioAtencion' => 'TELLO',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41801,
                'NombreMunicipioAtencion' => 'TERUEL',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41807,
                'NombreMunicipioAtencion' => 'TIMANA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41872,
                'NombreMunicipioAtencion' => 'VILLAVIEJA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 41885,
                'NombreMunicipioAtencion' => 'YAGUARA',
                'CodigoDepartamentoAtencion' => 41,
            ],
            [
                'CodigoMunicipioAtencion' => 44001,
                'NombreMunicipioAtencion' => 'RIOHACHA',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44035,
                'NombreMunicipioAtencion' => 'ALBANIA',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44078,
                'NombreMunicipioAtencion' => 'BARRANCAS',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44090,
                'NombreMunicipioAtencion' => 'DIBULLA',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44098,
                'NombreMunicipioAtencion' => 'DISTRACCION',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44110,
                'NombreMunicipioAtencion' => 'EL MOLINO',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44279,
                'NombreMunicipioAtencion' => 'FONSECA',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44378,
                'NombreMunicipioAtencion' => 'HATONUEVO',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44420,
                'NombreMunicipioAtencion' => 'LA JAGUA DEL PILAR',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44430,
                'NombreMunicipioAtencion' => 'MAICAO',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44560,
                'NombreMunicipioAtencion' => 'MANAURE',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44650,
                'NombreMunicipioAtencion' => 'SAN JUAN DEL CESAR',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44847,
                'NombreMunicipioAtencion' => 'URIBIA',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44855,
                'NombreMunicipioAtencion' => 'URUMITA',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 44874,
                'NombreMunicipioAtencion' => 'VILLANUEVA',
                'CodigoDepartamentoAtencion' => 44,
            ],
            [
                'CodigoMunicipioAtencion' => 47001,
                'NombreMunicipioAtencion' => 'SANTA MARTA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47030,
                'NombreMunicipioAtencion' => 'ALGARROBO',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47053,
                'NombreMunicipioAtencion' => 'ARACATACA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47058,
                'NombreMunicipioAtencion' => 'ARIGUANI',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47161,
                'NombreMunicipioAtencion' => 'CERRO SAN ANTONIO',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47170,
                'NombreMunicipioAtencion' => 'CHIVOLO',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47189,
                'NombreMunicipioAtencion' => 'CIENAGA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47205,
                'NombreMunicipioAtencion' => 'CONCORDIA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47245,
                'NombreMunicipioAtencion' => 'EL BANCO',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47258,
                'NombreMunicipioAtencion' => 'EL PINON',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47268,
                'NombreMunicipioAtencion' => 'EL RETEN',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47288,
                'NombreMunicipioAtencion' => 'FUNDACION',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47318,
                'NombreMunicipioAtencion' => 'GUAMAL',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47460,
                'NombreMunicipioAtencion' => 'NUEVA GRANADA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47541,
                'NombreMunicipioAtencion' => 'PEDRAZA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47545,
                'NombreMunicipioAtencion' => 'PIJINO DEL CARMEN',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47551,
                'NombreMunicipioAtencion' => 'PIVIJAY',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47555,
                'NombreMunicipioAtencion' => 'PLATO',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47570,
                'NombreMunicipioAtencion' => 'PUEBLOVIEJO',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47605,
                'NombreMunicipioAtencion' => 'REMOLINO',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47660,
                'NombreMunicipioAtencion' => 'SABANAS DE SAN ANGEL',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47675,
                'NombreMunicipioAtencion' => 'SALAMINA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47692,
                'NombreMunicipioAtencion' => 'SAN SEBASTIAN DE BUENAVISTA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47703,
                'NombreMunicipioAtencion' => 'SAN ZENON',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47707,
                'NombreMunicipioAtencion' => 'SANTA ANA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47720,
                'NombreMunicipioAtencion' => 'SANTA BARBARA DE PINTO',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47745,
                'NombreMunicipioAtencion' => 'SITIONUEVO',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47798,
                'NombreMunicipioAtencion' => 'TENERIFE',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47960,
                'NombreMunicipioAtencion' => 'ZAPAYAN',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 47980,
                'NombreMunicipioAtencion' => 'ZONA BANANERA',
                'CodigoDepartamentoAtencion' => 47,
            ],
            [
                'CodigoMunicipioAtencion' => 50001,
                'NombreMunicipioAtencion' => 'VILLAVICENCIO',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50006,
                'NombreMunicipioAtencion' => 'ACACIAS',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50110,
                'NombreMunicipioAtencion' => 'BARRANCA DE UPIA',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50124,
                'NombreMunicipioAtencion' => 'CABUYARO',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50150,
                'NombreMunicipioAtencion' => 'CASTILLA LA NUEVA',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50223,
                'NombreMunicipioAtencion' => 'CUBARRAL',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50226,
                'NombreMunicipioAtencion' => 'CUMARAL',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50245,
                'NombreMunicipioAtencion' => 'EL CALVARIO',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50251,
                'NombreMunicipioAtencion' => 'EL CASTILLO',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50270,
                'NombreMunicipioAtencion' => 'EL DORADO',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50287,
                'NombreMunicipioAtencion' => 'FUENTE DE ORO',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50313,
                'NombreMunicipioAtencion' => 'GRANADA',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50318,
                'NombreMunicipioAtencion' => 'GUAMAL',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50325,
                'NombreMunicipioAtencion' => 'MAPIRIPAN',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50330,
                'NombreMunicipioAtencion' => 'MESETAS',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50350,
                'NombreMunicipioAtencion' => 'LA MACARENA',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50370,
                'NombreMunicipioAtencion' => 'URIBE',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50400,
                'NombreMunicipioAtencion' => 'LEJANIAS',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50450,
                'NombreMunicipioAtencion' => 'PUERTO CONCORDIA',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50568,
                'NombreMunicipioAtencion' => 'PUERTO GAITAN',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50573,
                'NombreMunicipioAtencion' => 'PUERTO LOPEZ',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50577,
                'NombreMunicipioAtencion' => 'PUERTO LLERAS',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50590,
                'NombreMunicipioAtencion' => 'PUERTO RICO',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50606,
                'NombreMunicipioAtencion' => 'RESTREPO',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50680,
                'NombreMunicipioAtencion' => 'SAN CARLOS DE GUAROA',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50683,
                'NombreMunicipioAtencion' => 'SAN JUAN DE ARAMA',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50686,
                'NombreMunicipioAtencion' => 'SAN JUANITO',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50689,
                'NombreMunicipioAtencion' => 'SAN MARTIN',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 50711,
                'NombreMunicipioAtencion' => 'VISTAHERMOSA',
                'CodigoDepartamentoAtencion' => 50,
            ],
            [
                'CodigoMunicipioAtencion' => 52001,
                'NombreMunicipioAtencion' => 'PASTO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52019,
                'NombreMunicipioAtencion' => 'ALBAN',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52022,
                'NombreMunicipioAtencion' => 'ALDANA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52036,
                'NombreMunicipioAtencion' => 'ANCUYA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52051,
                'NombreMunicipioAtencion' => 'ARBOLEDA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52079,
                'NombreMunicipioAtencion' => 'BARBACOAS',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52083,
                'NombreMunicipioAtencion' => 'BELEN',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52110,
                'NombreMunicipioAtencion' => 'BUESACO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52203,
                'NombreMunicipioAtencion' => 'COLON',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52207,
                'NombreMunicipioAtencion' => 'CONSACA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52210,
                'NombreMunicipioAtencion' => 'CONTADERO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52215,
                'NombreMunicipioAtencion' => 'CORDOBA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52224,
                'NombreMunicipioAtencion' => 'CUASPUD',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52227,
                'NombreMunicipioAtencion' => 'CUMBAL',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52233,
                'NombreMunicipioAtencion' => 'CUMBITARA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52240,
                'NombreMunicipioAtencion' => 'CHACHAGUI',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52250,
                'NombreMunicipioAtencion' => 'EL CHARCO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52254,
                'NombreMunicipioAtencion' => 'EL PENOL',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52256,
                'NombreMunicipioAtencion' => 'EL ROSARIO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52258,
                'NombreMunicipioAtencion' => 'EL TABLON DE GOMEZ',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52260,
                'NombreMunicipioAtencion' => 'EL TAMBO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52287,
                'NombreMunicipioAtencion' => 'FUNES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52317,
                'NombreMunicipioAtencion' => 'GUACHUCAL',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52320,
                'NombreMunicipioAtencion' => 'GUAITARILLA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52323,
                'NombreMunicipioAtencion' => 'GUALMATAN',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52352,
                'NombreMunicipioAtencion' => 'ILES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52354,
                'NombreMunicipioAtencion' => 'IMUES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52356,
                'NombreMunicipioAtencion' => 'IPIALES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52378,
                'NombreMunicipioAtencion' => 'LA CRUZ',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52381,
                'NombreMunicipioAtencion' => 'LA FLORIDA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52385,
                'NombreMunicipioAtencion' => 'LA LLANADA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52390,
                'NombreMunicipioAtencion' => 'LA TOLA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52399,
                'NombreMunicipioAtencion' => 'LA UNION',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52405,
                'NombreMunicipioAtencion' => 'LEIVA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52411,
                'NombreMunicipioAtencion' => 'LINARES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52418,
                'NombreMunicipioAtencion' => 'LOS ANDES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52427,
                'NombreMunicipioAtencion' => 'MAGUI',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52435,
                'NombreMunicipioAtencion' => 'MALLAMA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52473,
                'NombreMunicipioAtencion' => 'MOSQUERA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52480,
                'NombreMunicipioAtencion' => 'NARINO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52490,
                'NombreMunicipioAtencion' => 'OLAYA HERRERA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52506,
                'NombreMunicipioAtencion' => 'OSPINA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52520,
                'NombreMunicipioAtencion' => 'FRANCISCO PIZARRO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52540,
                'NombreMunicipioAtencion' => 'POLICARPA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52560,
                'NombreMunicipioAtencion' => 'POTOSI',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52565,
                'NombreMunicipioAtencion' => 'PROVIDENCIA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52573,
                'NombreMunicipioAtencion' => 'PUERRES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52585,
                'NombreMunicipioAtencion' => 'PUPIALES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52612,
                'NombreMunicipioAtencion' => 'RICAURTE',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52621,
                'NombreMunicipioAtencion' => 'ROBERTO PAYAN',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52678,
                'NombreMunicipioAtencion' => 'SAMANIEGO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52683,
                'NombreMunicipioAtencion' => 'SANDONA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52685,
                'NombreMunicipioAtencion' => 'SAN BERNARDO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52687,
                'NombreMunicipioAtencion' => 'SAN LORENZO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52693,
                'NombreMunicipioAtencion' => 'SAN PABLO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52694,
                'NombreMunicipioAtencion' => 'SAN PEDRO DE CARTAGO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52696,
                'NombreMunicipioAtencion' => 'SANTA BARBARA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52699,
                'NombreMunicipioAtencion' => 'SANTACRUZ',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52720,
                'NombreMunicipioAtencion' => 'SAPUYES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52786,
                'NombreMunicipioAtencion' => 'TAMINANGO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52788,
                'NombreMunicipioAtencion' => 'TANGUA',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52835,
                'NombreMunicipioAtencion' => 'SAN ANDRES DE TUMACO',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52838,
                'NombreMunicipioAtencion' => 'TUQUERRES',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 52885,
                'NombreMunicipioAtencion' => 'YACUANQUER',
                'CodigoDepartamentoAtencion' => 52,
            ],
            [
                'CodigoMunicipioAtencion' => 54001,
                'NombreMunicipioAtencion' => 'CUCUTA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54003,
                'NombreMunicipioAtencion' => 'ABREGO',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54051,
                'NombreMunicipioAtencion' => 'ARBOLEDAS',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54099,
                'NombreMunicipioAtencion' => 'BOCHALEMA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54109,
                'NombreMunicipioAtencion' => 'BUCARASICA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54125,
                'NombreMunicipioAtencion' => 'CACOTA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54128,
                'NombreMunicipioAtencion' => 'CACHIRA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54172,
                'NombreMunicipioAtencion' => 'CHINACOTA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54174,
                'NombreMunicipioAtencion' => 'CHITAGA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54206,
                'NombreMunicipioAtencion' => 'CONVENCION',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54223,
                'NombreMunicipioAtencion' => 'CUCUTILLA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54239,
                'NombreMunicipioAtencion' => 'DURANIA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54245,
                'NombreMunicipioAtencion' => 'EL CARMEN',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54250,
                'NombreMunicipioAtencion' => 'EL TARRA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54261,
                'NombreMunicipioAtencion' => 'EL ZULIA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54313,
                'NombreMunicipioAtencion' => 'GRAMALOTE',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54344,
                'NombreMunicipioAtencion' => 'HACARI',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54347,
                'NombreMunicipioAtencion' => 'HERRAN',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54377,
                'NombreMunicipioAtencion' => 'LABATECA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54385,
                'NombreMunicipioAtencion' => 'LA ESPERANZA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54398,
                'NombreMunicipioAtencion' => 'LA PLAYA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54405,
                'NombreMunicipioAtencion' => 'LOS PATIOS',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54418,
                'NombreMunicipioAtencion' => 'LOURDES',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54480,
                'NombreMunicipioAtencion' => 'MUTISCUA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54498,
                'NombreMunicipioAtencion' => 'OCANA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54518,
                'NombreMunicipioAtencion' => 'PAMPLONA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54520,
                'NombreMunicipioAtencion' => 'PAMPLONITA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54553,
                'NombreMunicipioAtencion' => 'PUERTO SANTANDER',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54599,
                'NombreMunicipioAtencion' => 'RAGONVALIA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54660,
                'NombreMunicipioAtencion' => 'SALAZAR',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54670,
                'NombreMunicipioAtencion' => 'SAN CALIXTO',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54673,
                'NombreMunicipioAtencion' => 'SAN CAYETANO',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54680,
                'NombreMunicipioAtencion' => 'SANTIAGO',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54720,
                'NombreMunicipioAtencion' => 'SARDINATA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54743,
                'NombreMunicipioAtencion' => 'SILOS',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54800,
                'NombreMunicipioAtencion' => 'TEORAMA',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54810,
                'NombreMunicipioAtencion' => 'TIBU',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54820,
                'NombreMunicipioAtencion' => 'TOLEDO',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54871,
                'NombreMunicipioAtencion' => 'VILLA CARO',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 54874,
                'NombreMunicipioAtencion' => 'VILLA DEL ROSARIO',
                'CodigoDepartamentoAtencion' => 54,
            ],
            [
                'CodigoMunicipioAtencion' => 63001,
                'NombreMunicipioAtencion' => 'ARMENIA',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63111,
                'NombreMunicipioAtencion' => 'BUENAVISTA',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63130,
                'NombreMunicipioAtencion' => 'CALARCA',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63190,
                'NombreMunicipioAtencion' => 'CIRCASIA',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63212,
                'NombreMunicipioAtencion' => 'CORDOBA',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63272,
                'NombreMunicipioAtencion' => 'FILANDIA',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63302,
                'NombreMunicipioAtencion' => 'GENOVA',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63401,
                'NombreMunicipioAtencion' => 'LA TEBAIDA',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63470,
                'NombreMunicipioAtencion' => 'MONTENEGRO',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63548,
                'NombreMunicipioAtencion' => 'PIJAO',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63594,
                'NombreMunicipioAtencion' => 'QUIMBAYA',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 63690,
                'NombreMunicipioAtencion' => 'SALENTO',
                'CodigoDepartamentoAtencion' => 63,
            ],
            [
                'CodigoMunicipioAtencion' => 66001,
                'NombreMunicipioAtencion' => 'PEREIRA',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66045,
                'NombreMunicipioAtencion' => 'APIA',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66075,
                'NombreMunicipioAtencion' => 'BALBOA',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66088,
                'NombreMunicipioAtencion' => 'BELEN DE UMBRIA',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66170,
                'NombreMunicipioAtencion' => 'DOSQUEBRADAS',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66318,
                'NombreMunicipioAtencion' => 'GUATICA',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66383,
                'NombreMunicipioAtencion' => 'LA CELIA',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66400,
                'NombreMunicipioAtencion' => 'LA VIRGINIA',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66440,
                'NombreMunicipioAtencion' => 'MARSELLA',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66456,
                'NombreMunicipioAtencion' => 'MISTRATO',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66572,
                'NombreMunicipioAtencion' => 'PUEBLO RICO',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66594,
                'NombreMunicipioAtencion' => 'QUINCHIA',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66682,
                'NombreMunicipioAtencion' => 'SANTA ROSA DE CABAL',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 66687,
                'NombreMunicipioAtencion' => 'SANTUARIO',
                'CodigoDepartamentoAtencion' => 66,
            ],
            [
                'CodigoMunicipioAtencion' => 68001,
                'NombreMunicipioAtencion' => 'BUCARAMANGA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68013,
                'NombreMunicipioAtencion' => 'AGUADA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68020,
                'NombreMunicipioAtencion' => 'ALBANIA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68051,
                'NombreMunicipioAtencion' => 'ARATOCA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68077,
                'NombreMunicipioAtencion' => 'BARBOSA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68079,
                'NombreMunicipioAtencion' => 'BARICHARA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68081,
                'NombreMunicipioAtencion' => 'BARRANCABERMEJA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68092,
                'NombreMunicipioAtencion' => 'BETULIA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68101,
                'NombreMunicipioAtencion' => 'BOLIVAR',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68121,
                'NombreMunicipioAtencion' => 'CABRERA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68132,
                'NombreMunicipioAtencion' => 'CALIFORNIA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68147,
                'NombreMunicipioAtencion' => 'CAPITANEJO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68152,
                'NombreMunicipioAtencion' => 'CARCASI',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68160,
                'NombreMunicipioAtencion' => 'CEPITA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68162,
                'NombreMunicipioAtencion' => 'CERRITO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68167,
                'NombreMunicipioAtencion' => 'CHARALA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68169,
                'NombreMunicipioAtencion' => 'CHARTA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68176,
                'NombreMunicipioAtencion' => 'CHIMA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68179,
                'NombreMunicipioAtencion' => 'CHIPATA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68190,
                'NombreMunicipioAtencion' => 'CIMITARRA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68207,
                'NombreMunicipioAtencion' => 'CONCEPCION',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68209,
                'NombreMunicipioAtencion' => 'CONFINES',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68211,
                'NombreMunicipioAtencion' => 'CONTRATACION',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68217,
                'NombreMunicipioAtencion' => 'COROMORO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68229,
                'NombreMunicipioAtencion' => 'CURITI',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68235,
                'NombreMunicipioAtencion' => 'EL CARMEN DE CHUCURI',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68245,
                'NombreMunicipioAtencion' => 'EL GUACAMAYO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68250,
                'NombreMunicipioAtencion' => 'EL PENON',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68255,
                'NombreMunicipioAtencion' => 'EL PLAYON',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68264,
                'NombreMunicipioAtencion' => 'ENCINO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68266,
                'NombreMunicipioAtencion' => 'ENCISO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68271,
                'NombreMunicipioAtencion' => 'FLORIAN',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68276,
                'NombreMunicipioAtencion' => 'FLORIDABLANCA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68296,
                'NombreMunicipioAtencion' => 'GALAN',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68298,
                'NombreMunicipioAtencion' => 'GAMBITA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68307,
                'NombreMunicipioAtencion' => 'GIRON',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68318,
                'NombreMunicipioAtencion' => 'GUACA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68320,
                'NombreMunicipioAtencion' => 'GUADALUPE',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68322,
                'NombreMunicipioAtencion' => 'GUAPOTA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68324,
                'NombreMunicipioAtencion' => 'GUAVATA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68327,
                'NombreMunicipioAtencion' => 'GUEPSA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68344,
                'NombreMunicipioAtencion' => 'HATO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68368,
                'NombreMunicipioAtencion' => 'JESUS MARIA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68370,
                'NombreMunicipioAtencion' => 'JORDAN',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68377,
                'NombreMunicipioAtencion' => 'LA BELLEZA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68385,
                'NombreMunicipioAtencion' => 'LANDAZURI',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68397,
                'NombreMunicipioAtencion' => 'LA PAZ',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68406,
                'NombreMunicipioAtencion' => 'LEBRIJA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68418,
                'NombreMunicipioAtencion' => 'LOS SANTOS',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68425,
                'NombreMunicipioAtencion' => 'MACARAVITA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68432,
                'NombreMunicipioAtencion' => 'MALAGA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68444,
                'NombreMunicipioAtencion' => 'MATANZA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68464,
                'NombreMunicipioAtencion' => 'MOGOTES',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68468,
                'NombreMunicipioAtencion' => 'MOLAGAVITA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68498,
                'NombreMunicipioAtencion' => 'OCAMONTE',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68500,
                'NombreMunicipioAtencion' => 'OIBA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68502,
                'NombreMunicipioAtencion' => 'ONZAGA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68522,
                'NombreMunicipioAtencion' => 'PALMAR',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68524,
                'NombreMunicipioAtencion' => 'PALMAS DEL SOCORRO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68533,
                'NombreMunicipioAtencion' => 'PARAMO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68547,
                'NombreMunicipioAtencion' => 'PIEDECUESTA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68549,
                'NombreMunicipioAtencion' => 'PINCHOTE',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68572,
                'NombreMunicipioAtencion' => 'PUENTE NACIONAL',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68573,
                'NombreMunicipioAtencion' => 'PUERTO PARRA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68575,
                'NombreMunicipioAtencion' => 'PUERTO WILCHES',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68615,
                'NombreMunicipioAtencion' => 'RIONEGRO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68655,
                'NombreMunicipioAtencion' => 'SABANA DE TORRES',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68669,
                'NombreMunicipioAtencion' => 'SAN ANDRES',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68673,
                'NombreMunicipioAtencion' => 'SAN BENITO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68679,
                'NombreMunicipioAtencion' => 'SAN GIL',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68682,
                'NombreMunicipioAtencion' => 'SAN JOAQUIN',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68684,
                'NombreMunicipioAtencion' => 'SAN JOSE DE MIRANDA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68686,
                'NombreMunicipioAtencion' => 'SAN MIGUEL',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68689,
                'NombreMunicipioAtencion' => 'SAN VICENTE DE CHUCURI',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68705,
                'NombreMunicipioAtencion' => 'SANTA BARBARA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68720,
                'NombreMunicipioAtencion' => 'SANTA HELENA DEL OPON',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68745,
                'NombreMunicipioAtencion' => 'SIMACOTA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68755,
                'NombreMunicipioAtencion' => 'SOCORRO',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68770,
                'NombreMunicipioAtencion' => 'SUAITA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68773,
                'NombreMunicipioAtencion' => 'SUCRE',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68780,
                'NombreMunicipioAtencion' => 'SURATA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68820,
                'NombreMunicipioAtencion' => 'TONA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68855,
                'NombreMunicipioAtencion' => 'VALLE DE SAN JOSE',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68861,
                'NombreMunicipioAtencion' => 'VELEZ',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68867,
                'NombreMunicipioAtencion' => 'VETAS',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68872,
                'NombreMunicipioAtencion' => 'VILLANUEVA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 68895,
                'NombreMunicipioAtencion' => 'ZAPATOCA',
                'CodigoDepartamentoAtencion' => 68,
            ],
            [
                'CodigoMunicipioAtencion' => 70001,
                'NombreMunicipioAtencion' => 'SINCELEJO',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70110,
                'NombreMunicipioAtencion' => 'BUENAVISTA',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70124,
                'NombreMunicipioAtencion' => 'CAIMITO',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70204,
                'NombreMunicipioAtencion' => 'COLOSO',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70215,
                'NombreMunicipioAtencion' => 'COROZAL',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70221,
                'NombreMunicipioAtencion' => 'COVENAS',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70230,
                'NombreMunicipioAtencion' => 'CHALAN',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70233,
                'NombreMunicipioAtencion' => 'EL ROBLE',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70235,
                'NombreMunicipioAtencion' => 'GALERAS',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70265,
                'NombreMunicipioAtencion' => 'GUARANDA',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70400,
                'NombreMunicipioAtencion' => 'LA UNION',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70418,
                'NombreMunicipioAtencion' => 'LOS PALMITOS',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70429,
                'NombreMunicipioAtencion' => 'MAJAGUAL',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70473,
                'NombreMunicipioAtencion' => 'MORROA',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70508,
                'NombreMunicipioAtencion' => 'OVEJAS',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70523,
                'NombreMunicipioAtencion' => 'PALMITO',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70670,
                'NombreMunicipioAtencion' => 'SAMPUES',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70678,
                'NombreMunicipioAtencion' => 'SAN BENITO ABAD',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70702,
                'NombreMunicipioAtencion' => 'SAN JUAN DE BETULIA',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70708,
                'NombreMunicipioAtencion' => 'SAN MARCOS',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70713,
                'NombreMunicipioAtencion' => 'SAN ONOFRE',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70717,
                'NombreMunicipioAtencion' => 'SAN PEDRO',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70742,
                'NombreMunicipioAtencion' => 'SAN LUIS DE SINCE',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70771,
                'NombreMunicipioAtencion' => 'SUCRE',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70820,
                'NombreMunicipioAtencion' => 'SANTIAGO DE TOLU',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 70823,
                'NombreMunicipioAtencion' => 'TOLU VIEJO',
                'CodigoDepartamentoAtencion' => 70,
            ],
            [
                'CodigoMunicipioAtencion' => 73001,
                'NombreMunicipioAtencion' => 'IBAGUE',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73024,
                'NombreMunicipioAtencion' => 'ALPUJARRA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73026,
                'NombreMunicipioAtencion' => 'ALVARADO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73030,
                'NombreMunicipioAtencion' => 'AMBALEMA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73043,
                'NombreMunicipioAtencion' => 'ANZOATEGUI',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73055,
                'NombreMunicipioAtencion' => 'ARMERO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73067,
                'NombreMunicipioAtencion' => 'ATACO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73124,
                'NombreMunicipioAtencion' => 'CAJAMARCA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73148,
                'NombreMunicipioAtencion' => 'CARMEN DE APICALA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73152,
                'NombreMunicipioAtencion' => 'CASABIANCA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73168,
                'NombreMunicipioAtencion' => 'CHAPARRAL',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73200,
                'NombreMunicipioAtencion' => 'COELLO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73217,
                'NombreMunicipioAtencion' => 'COYAIMA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73226,
                'NombreMunicipioAtencion' => 'CUNDAY',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73236,
                'NombreMunicipioAtencion' => 'DOLORES',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73268,
                'NombreMunicipioAtencion' => 'ESPINAL',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73270,
                'NombreMunicipioAtencion' => 'FALAN',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73275,
                'NombreMunicipioAtencion' => 'FLANDES',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73283,
                'NombreMunicipioAtencion' => 'FRESNO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73319,
                'NombreMunicipioAtencion' => 'GUAMO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73347,
                'NombreMunicipioAtencion' => 'HERVEO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73349,
                'NombreMunicipioAtencion' => 'HONDA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73352,
                'NombreMunicipioAtencion' => 'ICONONZO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73408,
                'NombreMunicipioAtencion' => 'LERIDA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73411,
                'NombreMunicipioAtencion' => 'LIBANO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73443,
                'NombreMunicipioAtencion' => 'SAN SEBASTIAN DE MARIQUITA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73449,
                'NombreMunicipioAtencion' => 'MELGAR',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73461,
                'NombreMunicipioAtencion' => 'MURILLO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73483,
                'NombreMunicipioAtencion' => 'NATAGAIMA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73504,
                'NombreMunicipioAtencion' => 'ORTEGA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73520,
                'NombreMunicipioAtencion' => 'PALOCABILDO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73547,
                'NombreMunicipioAtencion' => 'PIEDRAS',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73555,
                'NombreMunicipioAtencion' => 'PLANADAS',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73563,
                'NombreMunicipioAtencion' => 'PRADO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73585,
                'NombreMunicipioAtencion' => 'PURIFICACION',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73616,
                'NombreMunicipioAtencion' => 'RIOBLANCO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73622,
                'NombreMunicipioAtencion' => 'RONCESVALLES',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73624,
                'NombreMunicipioAtencion' => 'ROVIRA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73671,
                'NombreMunicipioAtencion' => 'SALDANA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73675,
                'NombreMunicipioAtencion' => 'SAN ANTONIO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73678,
                'NombreMunicipioAtencion' => 'SAN LUIS',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73686,
                'NombreMunicipioAtencion' => 'SANTA ISABEL',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73770,
                'NombreMunicipioAtencion' => 'SUAREZ',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73854,
                'NombreMunicipioAtencion' => 'VALLE DE SAN JUAN',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73861,
                'NombreMunicipioAtencion' => 'VENADILLO',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73870,
                'NombreMunicipioAtencion' => 'VILLAHERMOSA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 73873,
                'NombreMunicipioAtencion' => 'VILLARRICA',
                'CodigoDepartamentoAtencion' => 73,
            ],
            [
                'CodigoMunicipioAtencion' => 76001,
                'NombreMunicipioAtencion' => 'CALI',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76020,
                'NombreMunicipioAtencion' => 'ALCALA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76036,
                'NombreMunicipioAtencion' => 'ANDALUCIA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76041,
                'NombreMunicipioAtencion' => 'ANSERMANUEVO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76054,
                'NombreMunicipioAtencion' => 'ARGELIA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76100,
                'NombreMunicipioAtencion' => 'BOLIVAR',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76109,
                'NombreMunicipioAtencion' => 'BUENAVENTURA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76111,
                'NombreMunicipioAtencion' => 'GUADALAJARA DE BUGA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76113,
                'NombreMunicipioAtencion' => 'BUGALAGRANDE',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76122,
                'NombreMunicipioAtencion' => 'CAICEDONIA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76126,
                'NombreMunicipioAtencion' => 'CALIMA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76130,
                'NombreMunicipioAtencion' => 'CANDELARIA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76147,
                'NombreMunicipioAtencion' => 'CARTAGO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76233,
                'NombreMunicipioAtencion' => 'DAGUA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76243,
                'NombreMunicipioAtencion' => 'EL AGUILA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76246,
                'NombreMunicipioAtencion' => 'EL CAIRO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76248,
                'NombreMunicipioAtencion' => 'EL CERRITO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76250,
                'NombreMunicipioAtencion' => 'EL DOVIO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76275,
                'NombreMunicipioAtencion' => 'FLORIDA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76306,
                'NombreMunicipioAtencion' => 'GINEBRA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76318,
                'NombreMunicipioAtencion' => 'GUACARI',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76364,
                'NombreMunicipioAtencion' => 'JAMUNDI',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76377,
                'NombreMunicipioAtencion' => 'LA CUMBRE',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76400,
                'NombreMunicipioAtencion' => 'LA UNION',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76403,
                'NombreMunicipioAtencion' => 'LA VICTORIA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76497,
                'NombreMunicipioAtencion' => 'OBANDO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76520,
                'NombreMunicipioAtencion' => 'PALMIRA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76563,
                'NombreMunicipioAtencion' => 'PRADERA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76606,
                'NombreMunicipioAtencion' => 'RESTREPO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76616,
                'NombreMunicipioAtencion' => 'RIOFRIO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76622,
                'NombreMunicipioAtencion' => 'ROLDANILLO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76670,
                'NombreMunicipioAtencion' => 'SAN PEDRO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76736,
                'NombreMunicipioAtencion' => 'SEVILLA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76823,
                'NombreMunicipioAtencion' => 'TORO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76828,
                'NombreMunicipioAtencion' => 'TRUJILLO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76834,
                'NombreMunicipioAtencion' => 'TULUA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76845,
                'NombreMunicipioAtencion' => 'ULLOA',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76863,
                'NombreMunicipioAtencion' => 'VERSALLES',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76869,
                'NombreMunicipioAtencion' => 'VIJES',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76890,
                'NombreMunicipioAtencion' => 'YOTOCO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76892,
                'NombreMunicipioAtencion' => 'YUMBO',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 76895,
                'NombreMunicipioAtencion' => 'ZARZAL',
                'CodigoDepartamentoAtencion' => 76,
            ],
            [
                'CodigoMunicipioAtencion' => 81001,
                'NombreMunicipioAtencion' => 'ARAUCA',
                'CodigoDepartamentoAtencion' => 81,
            ],
            [
                'CodigoMunicipioAtencion' => 81065,
                'NombreMunicipioAtencion' => 'ARAUQUITA',
                'CodigoDepartamentoAtencion' => 81,
            ],
            [
                'CodigoMunicipioAtencion' => 81220,
                'NombreMunicipioAtencion' => 'CRAVO NORTE',
                'CodigoDepartamentoAtencion' => 81,
            ],
            [
                'CodigoMunicipioAtencion' => 81300,
                'NombreMunicipioAtencion' => 'FORTUL',
                'CodigoDepartamentoAtencion' => 81,
            ],
            [
                'CodigoMunicipioAtencion' => 81591,
                'NombreMunicipioAtencion' => 'PUERTO RONDON',
                'CodigoDepartamentoAtencion' => 81,
            ],
            [
                'CodigoMunicipioAtencion' => 81736,
                'NombreMunicipioAtencion' => 'SARAVENA',
                'CodigoDepartamentoAtencion' => 81,
            ],
            [
                'CodigoMunicipioAtencion' => 81794,
                'NombreMunicipioAtencion' => 'TAME',
                'CodigoDepartamentoAtencion' => 81,
            ],
            [
                'CodigoMunicipioAtencion' => 85001,
                'NombreMunicipioAtencion' => 'YOPAL',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85010,
                'NombreMunicipioAtencion' => 'AGUAZUL',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85015,
                'NombreMunicipioAtencion' => 'CHAMEZA',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85125,
                'NombreMunicipioAtencion' => 'HATO COROZAL',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85136,
                'NombreMunicipioAtencion' => 'LA SALINA',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85139,
                'NombreMunicipioAtencion' => 'MANI',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85162,
                'NombreMunicipioAtencion' => 'MONTERREY',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85225,
                'NombreMunicipioAtencion' => 'NUNCHIA',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85230,
                'NombreMunicipioAtencion' => 'OROCUE',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85250,
                'NombreMunicipioAtencion' => 'PAZ DE ARIPORO',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85263,
                'NombreMunicipioAtencion' => 'PORE',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85279,
                'NombreMunicipioAtencion' => 'RECETOR',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85300,
                'NombreMunicipioAtencion' => 'SABANALARGA',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85315,
                'NombreMunicipioAtencion' => 'SACAMA',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85325,
                'NombreMunicipioAtencion' => 'SAN LUIS DE PALENQUE',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85400,
                'NombreMunicipioAtencion' => 'TAMARA',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85410,
                'NombreMunicipioAtencion' => 'TAURAMENA',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85430,
                'NombreMunicipioAtencion' => 'TRINIDAD',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 85440,
                'NombreMunicipioAtencion' => 'VILLANUEVA',
                'CodigoDepartamentoAtencion' => 85,
            ],
            [
                'CodigoMunicipioAtencion' => 86001,
                'NombreMunicipioAtencion' => 'MOCOA',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86219,
                'NombreMunicipioAtencion' => 'COLON',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86320,
                'NombreMunicipioAtencion' => 'ORITO',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86568,
                'NombreMunicipioAtencion' => 'PUERTO ASIS',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86569,
                'NombreMunicipioAtencion' => 'PUERTO CAICEDO',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86571,
                'NombreMunicipioAtencion' => 'PUERTO GUZMAN',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86573,
                'NombreMunicipioAtencion' => 'PUERTO LEGUIZAMO',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86749,
                'NombreMunicipioAtencion' => 'SIBUNDOY',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86755,
                'NombreMunicipioAtencion' => 'SAN FRANCISCO',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86757,
                'NombreMunicipioAtencion' => 'SAN MIGUEL',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86760,
                'NombreMunicipioAtencion' => 'SANTIAGO',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86865,
                'NombreMunicipioAtencion' => 'VALLE DEL GUAMUEZ',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 86885,
                'NombreMunicipioAtencion' => 'VILLAGARZON',
                'CodigoDepartamentoAtencion' => 86,
            ],
            [
                'CodigoMunicipioAtencion' => 88001,
                'NombreMunicipioAtencion' => 'SAN ANDRES',
                'CodigoDepartamentoAtencion' => 88,
            ],
            [
                'CodigoMunicipioAtencion' => 88564,
                'NombreMunicipioAtencion' => 'PROVIDENCIA',
                'CodigoDepartamentoAtencion' => 88,
            ],
            [
                'CodigoMunicipioAtencion' => 91001,
                'NombreMunicipioAtencion' => 'LETICIA',
                'CodigoDepartamentoAtencion' => 91,
            ],
            [
                'CodigoMunicipioAtencion' => 91263,
                'NombreMunicipioAtencion' => 'EL ENCANTO',
                'CodigoDepartamentoAtencion' => 91,
            ],
            [
                'CodigoMunicipioAtencion' => 91405,
                'NombreMunicipioAtencion' => 'LA CHORRERA',
                'CodigoDepartamentoAtencion' => 91,
            ],
            [
                'CodigoMunicipioAtencion' => 91407,
                'NombreMunicipioAtencion' => 'LA PEDRERA',
                'CodigoDepartamentoAtencion' => 91,
            ],
            [
                'CodigoMunicipioAtencion' => 91540,
                'NombreMunicipioAtencion' => 'PUERTO NARINO',
                'CodigoDepartamentoAtencion' => 91,
            ],
            [
                'CodigoMunicipioAtencion' => 91669,
                'NombreMunicipioAtencion' => 'PUERTO SANTANDER',
                'CodigoDepartamentoAtencion' => 91,
            ],
            [
                'CodigoMunicipioAtencion' => 91798,
                'NombreMunicipioAtencion' => 'TARAPACA',
                'CodigoDepartamentoAtencion' => 91,
            ],
            [
                'CodigoMunicipioAtencion' => 94001,
                'NombreMunicipioAtencion' => 'INIRIDA',
                'CodigoDepartamentoAtencion' => 94,
            ],
            [
                'CodigoMunicipioAtencion' => 94343,
                'NombreMunicipioAtencion' => 'BARRANCO MINAS',
                'CodigoDepartamentoAtencion' => 94,
            ],
            [
                'CodigoMunicipioAtencion' => 95001,
                'NombreMunicipioAtencion' => 'SAN JOSE DEL GUAVIARE',
                'CodigoDepartamentoAtencion' => 95,
            ],
            [
                'CodigoMunicipioAtencion' => 95015,
                'NombreMunicipioAtencion' => 'CALAMAR',
                'CodigoDepartamentoAtencion' => 95,
            ],
            [
                'CodigoMunicipioAtencion' => 95025,
                'NombreMunicipioAtencion' => 'EL RETORNO',
                'CodigoDepartamentoAtencion' => 95,
            ],
            [
                'CodigoMunicipioAtencion' => 95200,
                'NombreMunicipioAtencion' => 'MIRAFLORES',
                'CodigoDepartamentoAtencion' => 95,
            ],
            [
                'CodigoMunicipioAtencion' => 97001,
                'NombreMunicipioAtencion' => 'MITU',
                'CodigoDepartamentoAtencion' => 97,
            ],
            [
                'CodigoMunicipioAtencion' => 97161,
                'NombreMunicipioAtencion' => 'CARURU',
                'CodigoDepartamentoAtencion' => 97,
            ],
            [
                'CodigoMunicipioAtencion' => 97666,
                'NombreMunicipioAtencion' => 'TARAIRA',
                'CodigoDepartamentoAtencion' => 97,
            ],
            [
                'CodigoMunicipioAtencion' => 99001,
                'NombreMunicipioAtencion' => 'PUERTO CARRENO',
                'CodigoDepartamentoAtencion' => 99,
            ],
            [
                'CodigoMunicipioAtencion' => 99524,
                'NombreMunicipioAtencion' => 'LA PRIMAVERA',
                'CodigoDepartamentoAtencion' => 99,
            ],
            [
                'CodigoMunicipioAtencion' => 99624,
                'NombreMunicipioAtencion' => 'SANTA ROSALIA',
                'CodigoDepartamentoAtencion' => 99,
            ],
            [
                'CodigoMunicipioAtencion' => 99773,
                'NombreMunicipioAtencion' => 'CUMARIBO',
                'CodigoDepartamentoAtencion' => 99,
            ],
        ];
        DB::table('municipios')->insert($data);
    }
}
