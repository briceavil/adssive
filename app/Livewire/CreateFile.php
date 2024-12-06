<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CreateFile extends ModalComponent
{
    use WithFileUploads;
    public $tittle;
    public $original_title;
    public $format;
    public $file;


    public function addFile()
    {
        $newFile = Storage::disk('collection')->put('image', $this->file[0]);
        $fileGet = Storage::url($newFile);
        dd($fileGet);
        dd($this->file[0]->getClientOriginalName());
        File::create([
            'tittle' => $this->tittle,
            'original_title' => $this->original_title,
            'format' => $this->format,
            'path' => 'image',
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
