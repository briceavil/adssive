<?php

namespace App\Livewire;

use Livewire\Component;

class CreateFiles extends Component
{
public $tittle;
public $original_tittle;
public $format;
public $path;
public $user;
    public function addFile()
    {
        $this->files = File::create([
            'tittle' => $this->tittle,
            'original_tittle' => $this->original_tittle,
            'format' => $this->format,
            'path' => $this->path,
            'isActive' => true,
            'user_id' => $this->user_id,
        ]);
    }
    public function render()
    {
        return view('livewire.create-files');
    }
}
