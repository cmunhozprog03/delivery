<?php

namespace App\Http\Livewire\Setor;

use App\Models\Setor as ModelsSetor;
use Livewire\Component;

class Setor extends Component
{

    public function render()
    {
        $setores = ModelsSetor::all();
        return view('livewire.setor.setor', ['setores' => $setores]);
    }
}
