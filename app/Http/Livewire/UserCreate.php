<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;

    public function save(){
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.user-create');
    }
}
