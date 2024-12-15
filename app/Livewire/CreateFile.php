<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use LivewireUI\Modal\ModalComponent;

class CreateFile extends ModalComponent
{
    use WithFileUploads;
    use WithPagination;
    public $file;


    public function addFile()
    {
        $file_uploaded = $this->file[0];
        $file_name = time() . '.' . $file_uploaded->getClientOriginalExtension();
        $path = $file_uploaded->storeAs('image', $file_name, 'collection');
        File::create([
            'tittle' => $file_name,
            'original_title' => $file_uploaded->getClientOriginalName(),
            'format' => $file_uploaded->getClientOriginalExtension(),
            'path' => $path,
            'is_active' => true,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('files');
    }

    public function render()
    {
        return view('livewire.create-file');
    }
}
