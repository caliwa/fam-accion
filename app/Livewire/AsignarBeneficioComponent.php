<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Asignarbeneficio;


class AsignarBeneficioComponent extends Component
{
    use WithPagination;
    public $search_asignacion_beneficio;

    public function render()
    {
        try {
            
            $asignarbeneficios = Asignarbeneficio::where(function($query) {
                if (!$this->search_asignacion_beneficio) {
                    return Asignarbeneficio::all();
                }else{
                    $query->where('Cedula', '=', $this->search_asignacion_beneficio);
                }
            })
            ->orderBy('updated_at', 'desc')
            ->paginate(20);

            return view('livewire.asignar-beneficio-component', ['asignarbeneficios' => $asignarbeneficios]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
