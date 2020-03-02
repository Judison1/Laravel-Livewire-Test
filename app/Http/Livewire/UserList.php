<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search;
    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function getUsersProperty()
    {
       return User::where('name', 'ilike', '%'.$this->search.'%')->orWhere('email', 'ilike', '%'.$this->search.'%')->orderBy('updated_at', 'desc')->paginate(10);
    }

    public function destroy(User $user){
        $user->delete();
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
