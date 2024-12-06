<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Format;
use LivewireUI\Modal\ModalComponent;

class EditFormat extends ModalComponent
{

    public Format $format;
    public $format_name;
    public $mime_type;
    public $description;

    public function editFormat()
    {
        $this->format->update(['format_name' => $this->format_name, 'mime_type' => $this->mime_type, 'description' => $this->description]);
        return redirect()->route('formats');
    }

    public function mount(Format $format)
    {
        $this->format_name = $format->format_name;
        $this->mime_type = $format->mime_type;
        $this->description = $format->description;
    }

    public function render()
    {
        return view('livewire.edit-format');
    }
}
