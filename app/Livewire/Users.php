<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $search;


    public function searchUsers()
    {
        $this->users = User::where('name', 'like', '%' . $this->search . '%')->paginate(10);
    }

    public function render()
    {
        return view('livewire.users', ['users' => $this->users ?? User::paginate(10)]);
    }
}
