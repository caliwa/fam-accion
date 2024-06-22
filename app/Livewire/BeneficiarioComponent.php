<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Beneficiario;

class BeneficiarioComponent extends Component
{
    use WithPagination;
    public $search_beneficiario;
    public $search_beneficiario_ced;

    public function render()
    {
        try {
            return view('livewire.beneficiario-component', 
                ['beneficiarios' => Beneficiario::where('Beneficiario', 'like', $this->search_beneficiario . '%')
                    ->where(function($query) {
                    if (!$this->search_beneficiario_ced) {
                        return Beneficiario::all();
                    }else{
                        $query->where('id', '=', $this->search_beneficiario_ced);
                    }
                })
                    ->orderBy('updated_at', 'desc')
                    ->paginate(20)
                ]
            );
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

}
