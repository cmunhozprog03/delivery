<?php

namespace App\Http\Livewire\Setor;

use App\Models\Setor as ModelsSetor;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Setor extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $ids;
    public $name;
    public $description;
    public $body;
    public $position;
    public $active;
    public $slug;
    public $image;
    public $searchTerm;

    public function resetInputFields()
    {
        $this->name = '';
        $this->description = '';
        $this->body = '';
        $this->position = '';
        $this->active = '';
        $this->image = '';
    }

    public function store()
    {
        $setor = $this->validate([
            'name' => 'required',
            'position' => 'required',
            'active' => 'required',
            'image' => 'image|max:1024'
            
        ]);
        
        $image = $this->image->store('setores', 'public');
        $setor['image'] = $image;
        $slug = $this->name;
        $setor['slug'] = Str::slug($slug);
        
         $setor = ModelsSetor::create($setor);

    }
    public function render()
    {
        $setores = ModelsSetor::paginate(3);
        return view('livewire.setor.setor', ['setores' => $setores]);
    }
}
