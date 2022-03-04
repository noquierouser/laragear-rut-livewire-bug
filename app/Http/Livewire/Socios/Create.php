<?php

namespace App\Http\Livewire\Socios;

use App\Models\Socio;
use Livewire\Component;

class Create extends Component
{
    public Socio $socio;

    protected array $rules = [
        'socio.rut' => ['required', 'rut'],
        'socio.nombres' => ['required'],
        'socio.apellidos' => ['required'],
        'socio.direccion' => ['required']
    ];

    public function mount(Socio $socio)
    {
        $this->socio = $socio;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        $this->socio->save();

        $this->redirectRoute('socios.index');
    }
    
    public function render()
    {
        return view('livewire.socios.create');
    }
}
