<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersDemo extends Component
{
    public $users;
    public $selectedUserId;
    public $selectedUser;
    public $mermaid;

    public function mount()
    {
        $this->users = User::all();
        $this->selectedUserId = 'all';
        $this->selectedUser = null;
    }

    public function updatedSelectedUserId($userId)
    {
        if ($userId && $userId !== 'all') {
            $user = User::find($userId);
            $this->selectedUser = $user;
        } else {
            $this->selectedUser = null;
        }
    }

    public function render()
    {
        if($this->selectedUserId === 'all') {
            $collection = User::with('posts')->get();
        } else {
            $collection = User::where('id', $this->selectedUserId)->with('posts')->get();
        }
        
        $this->mermaid = app('mermaid')->generateDiagramFromCollection($collection);

        return view('livewire.users-demo');
    }
}