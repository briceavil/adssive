<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class EditUser extends ModalComponent
{
    public User $user;
    public $name;
    public $email;
    public $role;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function editUser(User $user)
    {
        $this->user->update(['name' => $this->name, 'email' => $this->email]);
        $this->user->syncRoles($this->role);


        return redirect()->route('dashboard');
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.edit-user', ['user' => $this->user, 'roles' => $roles]);
    }
}
