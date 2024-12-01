<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Format;
use LivewireUI\Modal\ModalComponent;


class CreateFormat extends ModalComponent
{
    public $format_name;
    public $mime_type;
    public $description;

    public function addFormat()
    {
        Format::create([
            'format_name' => $this->format_name,
            'mime_type' => $this->mime_type,
            'description' => $this->description,
            'is_active' => true
        ]);
        return redirect()->route('formats');
    }

    public function render()
    {
        return view('livewire.create-format');
    }
}
