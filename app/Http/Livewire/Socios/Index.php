<?php

namespace App\Http\Livewire\Socios;

use App\Models\Socio;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    
    public function render()
    {
        return view('livewire.socios.index', [
            'socios' => Socio::where('nombres', 'like', "%{$this->search}%")
                ->orWhere('apellidos', 'like', "%{$this->search}%")
                ->orWhere('rut_num', 'like', "%{$this->search}%")
                ->orderBy('apellidos', 'ASC')
                ->get()
        ]);
    }
}
