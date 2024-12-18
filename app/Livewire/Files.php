<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\File;
use Livewire\WithPagination;

class Files extends Component
{
    use WithPagination;
    public $search;

    public function searchFile()
    {
        $this->files = File::where('tittle', 'like', '%' . $this->search . '%')->paginate(10);
    }

    public function render()
    {
        return view('livewire.files', ['files' => $this->files ?? File::paginate(10)]);
    }
}
