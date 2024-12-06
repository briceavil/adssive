<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Format;
use Livewire\WithPagination;

class Formats extends Component
{
    use WithPagination;
    public $search;
    public function mount()
    {
        if (auth()->user()->hasRole('manager')) {
            $this->formats = Format::where('mime_type', 'like', '%' . 'image' . '%')->orWhere('mime_type', 'like', '%' . 'video' . '%')->orderBy('updated_at', 'desc')->paginate(12);
        }

        if (auth()->user()->hasRole('admin')) {
            $this->formats = Format::where('mime_type', 'like', '%' . 'application' . '%')->orWhere('mime_type', 'like', '%' . 'text' . '%')->orderBy('updated_at', 'desc')->paginate(12);
        }

        if (auth()->user()->hasRole('super')) {
            $this->formats = Format::orderBy('updated_at', 'desc')->paginate(12);
        }
    }

    public function searchFormat()
    {
        $this->formats = Format::where('mime_type', 'like', '%' . $this->search . '%')->orWhere('format_name', 'like', '%' . $this->search . '%')->orderBy('updated_at', 'desc')->paginate(12);
    }

    public function render()
    {
        return view('livewire.formats', ['formats' => $this->formats ?? Format::OrderBy('updated_at', 'desc')->paginate(12)]);
    }
}
