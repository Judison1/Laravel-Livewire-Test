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
    public $user;

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function getUsersProperty()
    {
       return User::where('name', 'ilike', '%'.$this->search.'%')->orWhere('email', 'ilike', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(10);
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->update($this->user[$id]);
    }

    public function destroy($id){
        User::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
