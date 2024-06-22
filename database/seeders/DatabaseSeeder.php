<?php

namespace Database\Seeders;
use App\Models\Tipobeneficio;
use App\Models\Tipodocumento;
use App\Models\Tipopoblacion;
use App\Models\RangoBeneficioConsolidadoAsignado;
use App\Models\NivelEscolaridad;
use App\Models\Etnium;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Beneficiario;
use App\Models\AsignarBeneficio;
use App\Models\User;

use Spatie\Permission\Models\Role;


use Illuminate\Support\Facades\Hash;



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TipobeneficioSeeder::class);
        $this->call(TipodocumentoSeeder::class);
        $this->call(TipopoblacionSeeder::class);
        $this->call(RangoBeneficioConsolidadoAsignadoSeeder::class);
        $this->call(NivelEscolaridadSeeder::class);
        $this->call(EtniaSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(MunicipiosSeeder::class);
        $this->call(BeneficiarioSeeder::class);
        $this->call(AsignarBeneficiosSeeder::class);
        Tipobeneficio::query()->update(['created_at' => now()]);
        Tipodocumento::query()->update(['created_at' => now()]);
        Tipopoblacion::query()->update(['created_at' => now()]);
        RangoBeneficioConsolidadoAsignado::query()->update(['created_at' => now()]);
        NivelEscolaridad::query()->update(['created_at' => now()]);
        Etnium::query()->update(['created_at' => now()]);
        Departamento::query()->update(['created_at' => now()]);
        Municipio::query()->update(['created_at' => now()]);
        Beneficiario::query()->update(['created_at' => now()]);
        AsignarBeneficio::query()->update(['created_at' => now()]);

        $asignar_rol = Role::findByName('admin');

        $user = User::create([
            'name' => 'ADMIN',
            'email' => 'admin@famacc.com',
            'cedula' => 123,
            'password' => Hash::make("test1234")
        ]);
        $user->assignRole($asignar_rol);
    }
}